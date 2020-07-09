<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:administrator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexWelcome()
    {
        return view('console/ui/welcome/index');
    }

    public function indexAccount()
    {
        return view('console/ui/account/index');
    }

    public function indexComp()
    {
        return view('console/ui/comp/index');
    }

    public function indexWinners()
    {
        return view('console/ui/winner/index');
    }

    public function indexDraws()
    {
        return view('console/ui/draw/index');
    }

    public function create()
    {
        return view('console/comp/create');
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
