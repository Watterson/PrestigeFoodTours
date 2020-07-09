<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SupplierController extends Controller
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
        return view('console/supplier/index');
    }

    public function create()
    {
        return view('console/supplier/create');
    }

    public function update(Request $request)
    {
        return view('console/supplier/update');
    }

    public function delete(Request $request)
    {
        return view('console/supplier/delete');
    }
}
