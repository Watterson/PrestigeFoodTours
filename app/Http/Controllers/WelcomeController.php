<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CompetitionRepo;
use App\Models\Prize;



class WelcomeController extends Controller
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
        $prizes = Prize::all();
        $competitions = $this->competitionRepo->all();
        //only need this for displaying individual prizes
        foreach ($competitions as $key => $comp) {
          $prizeArray = explode(',' , $comp->prizes );
          $titleArray = explode(',' , $comp->titles);
          $comp->prizeArray = $prizeArray;
          $comp->titleArray = $titleArray;
        }
        // dd($competitions);
        return view('welcome', [
          'prizes' =>$prizes,
          'competitions' =>$competitions,
        ]);
    }
}
