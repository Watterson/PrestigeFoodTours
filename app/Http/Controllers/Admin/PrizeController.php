<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PrizeController extends Controller
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
    public function index()
    {
        return view('console/prize/index');
    }

    public function create()
    {
        return view('console/prize/create');
    }

    public function update(Request $request)
    {
        return view('console/prize/update');
    }

    public function delete(Request $request)
    {
        return view('console/prize/delete');
    }
}
