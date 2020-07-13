<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use App\Repositories\Admin\SupplierRepo;


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
        $allSuppliers = Supplier::all();

        return view('console/supplier/index', [
          'suppliers' =>$allSuppliers,
        ]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
           'title' => 'required',
           'description' => 'required',
           'contact' => 'required',
           'email' => 'required',
           'landline' => 'required',
           'mobile' => 'required',
           'address' => 'required',

        ]);
        $supplier = new Supplier;
        $supplier->title = Request()->input('title');
        $supplier->description = Request()->input('description');
        $supplier->contact = Request()->input('contact');
        $supplier->email = Request()->input('email');
        $supplier->landline = Request()->input('landline');
        $supplier->mobile = Request()->input('mobile');
        $supplier->address = Request()->input('address');
        $supplier->save();

        return redirect('console/supplier/index');
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
