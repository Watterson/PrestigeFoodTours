<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prize;
use App\Models\Supplier;


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
      $allPrizes = Prize::all();
      $suppliers = Supplier::all();

      return view('console/prize/index', [
        'prizes' =>$allPrizes,
        'suppliers' =>$suppliers,

      ]);
    }

    public function create(Request $request)
    {
      $validatedData = $request->validate([
         'supplier' => 'required',
         'title' => 'required',
         'description' => 'required',
         'cost' => 'required',

      ]);
      $prize = new Prize;
      $prize->supplier_id  = Request()->input('supplier');
      $prize->title = Request()->input('title');
      $prize->description = Request()->input('description');
      $prize->cost = Request()->input('cost');
      $prize->save();

        return redirect('console/competitions/prizes');
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
