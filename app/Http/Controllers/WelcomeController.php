<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CompetitionRepo;
use App\Models\Prize;
use Illuminate\Http\Request;


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
    public function index(Request $request)
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
        $cartSession = $request->session()->get('cart');

        // dd($competitions);
        return view('welcome', [
          'prizes' =>$prizes,
          'competitions' =>$competitions,
          'cartSession' =>$cartSession,
        ]);
    }
}
