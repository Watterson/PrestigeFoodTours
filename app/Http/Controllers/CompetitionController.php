<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CompetitionRepo;
use App\Models\Prize;

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
        $this->competitionRepo = $competitionRepo;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $competitions = $this->competitionRepo->all();
        //only need this for displaying individual prizes
        foreach ($competitions as $key => $comp) {
          $prizeArray = explode(',' , $comp->prizes );
          $titleArray = explode(',' , $comp->titles);
          $comp->prizeArray = $prizeArray;
          $comp->titleArray = $titleArray;
        }
        // dd($competitions);
        return view('competitions/index', [
          'competitions' =>$competitions,
        ]);
    }

    public function getComp($id)
    {
        $competition = $this->competitionRepo->getComp($id);
        // dd($competition);

          $prizeArray = explode(',' , $competition[0]->prizes );
          $titleArray = explode(',' , $competition[0]->titles);
          $competition[0]->prizeArray = $prizeArray;
          $competition[0]->titleArray = $titleArray;

        return view('competitions/main', [
          'competition' =>$competition,
        ]);
    }
}
