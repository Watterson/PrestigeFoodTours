<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prize;
use App\Models\Supplier;
use App\Models\Question;
use App\Models\Bundle;
use App\Models\BundlePrize;
use App\Repositories\Admin\CompetitionRepo;


class CompetitionController extends Controller
{
    /**
     * @var CompetitionRepo
     */
    private $competitionRepo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CompetitionRepo $competitionRepo)
    {
        $this->middleware('role:administrator');
        $this->competitionRepo = $competitionRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $prizes = Prize::all();
      $competitions = $this->competitionRepo->all();
      foreach ($competitions as $key => $comp) {
        $prizeArray = explode(',' , $comp->prizes );
        $titleArray = explode(',' , $comp->titles);
        $comp->prizeArray = $prizeArray;
        $comp->titleArray = $titleArray;
      }
      // dd($competitions);
      return view('console/comp/index', [
        'prizes' =>$prizes,
        'competitions' =>$competitions,
      ]);
    }

    // public function index()
    // {
    //   $prizes = Prize::all();
    //   $competitions = $this->CompetitionRepo->consoleIndex();
    //   return view('console/comp/index', [
    //     'prizes' =>$prizes,
    //     'competitions' =>$competitions,
    //   ]);
    // }
    public function getComp($compId)
    {
      $competition = $this->CompetitionRepo->getComp($compId);
      $question = Question::find($competition->question_id);
      return view('console/comp/update', [
        'question' =>$question,
        'competition' =>$competition,

      ]);
    }
    public function create()
      {
        $prizes = Prize::all();
        $newComp = null;

        return view('console/comp/create', [
          'prizes' =>$prizes,
          '$newComp' =>$newComp,

        ]);
    }

    public function postCreate(Request $request)
    {
        //validate the inputs from the create form
        $validatedData = $request->validate([
           'title' => 'required',
           'description' => 'required',
           'datetimes' => 'required',
           'total-entries' => 'required',
           'entry-price' => 'required',
        ]);

        $entryPrice = Request()->input('entry-price');//retrieve entry-price value
        $totalEntries =Request()->input('total-entries');//retrieve total-entries value
        $totalTake = $entryPrice*$totalEntries;//total takings is equal to the entry price multiplied by the total entries)
        $dateRange = Request()->input('datetimes');//retrieve total-entries value
        list($start, $end) = explode("  - ", $dateRange);
        //dd($totalTake);
        // dd($start);

        $competition = new Bundle;//New entry in Competition table
        $competition->title = Request()->input('title');//'title' coloumn is equal to the input 'title'
        $competition->description = Request()->input('description');//'description' coloumn is equal to the input 'description'
        $competition->start_date  = $start;
        $competition->end_date  = $end;
        $competition->total_entries  = $totalEntries;
        $competition->entry_price  = $entryPrice;
        $competition->total_cost  = 0;//assign total cost of competition
        $competition->total_profit  = 0;//assign total profit of competition
        $competition->save();
        // dd($competition);
        //total cost of competition is total of all prizes
        $prizeIDs = Request()->input('prizes');
        //Foreach loop through id's of prizes selected
        $totalCost = [];
        foreach ($prizeIDs as $key => $id) {
          $compPrizes = new BundlePrize;//create new record in BundlePrize table
          $compPrizes->bundle_id = $competition->id;//assign competition id
          $compPrizes->prize_id = $id;//assign prize id
          $compPrizes->save();
          $prize = Prize::find($id);
          $totalCost[$key] = $prize->cost;
        }
        // dd(($totalCost));

        $competition->total_cost  = array_sum($totalCost);//assign total cost of competition
        $competition->total_profit  = $totalTake - array_sum($totalCost);
        $competition->save();

        return redirect('console/competitions');
    }

    public function update(Request $request)
    {
        return view('console/comp/update');
    }

    public function delete(Request $request)
    {
        return view('console/comp/delete');
    }
}
