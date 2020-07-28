<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('carts/index');
    }

    public function add(Request $request)
    {

        $all = $request->all();
        $session = $request->session()->get('cart');
        $request->session()->push('cart', $all);
        $session = $request->session()->get('cart');
        return response()->json(['session'=> $session]);
    }

    public function check(Request $request)
    {

        $compId = $request->all();
        $cart = $request->session()->get('cart');
        if($cart){
          foreach ($cart as $comp) {
            
            if($compId == $comp['compId']){
              return response()->json(['inCart'=> true]);
            }
          }
          return response()->json(['inCart'=> false]);
        }else {
          return response()->json(['inCart'=> false]);
        }
    }
}
