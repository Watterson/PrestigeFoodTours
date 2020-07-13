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
     * @var CompetitionRepository
     */
    private $competitionRepo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()//CompetitionRepo $competitionRepo)
    {
        $this->middleware('role:administrator');
      //  $this->CompetitionRepo = $competitionRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $prizes = Prize::all();
      $competitions = Bundle::all();//$this->$competitionRepo->consoleIndex();
      $questions = Question::all();
      return view('console/comp/index', [
        'questions' =>$questions,
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

    public function postCreate()
    {
        $validatedData = $request->validate([
           'title' => 'required',
           'description' => 'required',
           'start_date' => 'required',
           'end_date' => 'required',
           'total_entries' => 'required',
           'total_cost' => 'required',
           'total_profit' => 'required',
        ]);

        $entryPrice = Request()->input('entry-price')
        $totalEntries =Request()->input('total_entries');
        $totalTake = $entryPrice*$totalEntries;

        $competition = new Competition;
        $competition->title = Request()->input('title');
        $competition->description = Request()->input('description');
        $competition->start_date  = Request()->input('start_date');
        $competition->end_date  = Request()->input('end_date');
        $competition->total_entries  = $totalEntries
        $competition->entry_price  = $entryPrice;
        $competition->save();

        //total cost of competition is total of all prizes
        foreach ($prizes as $key => $prize) {
          // code...
        }

        $competition->total_cost  = ;
        $competition->total_profit  = Request()->input('total_profit');        $competition->save();
        $competition->save();
        $prizes = Request()->input('prizes');
        foreach ($prizes as $key => $prize) {
          $compPrizes = new BundlePrize;
          $compPrizes->bundle_id = $competition->id;
          $compPrizes->prize_id = $prize->id;
          $compPrizes->save();
        }
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
