<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    function showHome(Request $request)
    {
        $product = DB::table('products')->get();

        $cartItems = Cart::where('user_id', session('loggedInUser'))->get();

        return view('index', compact('product', 'cartItems'));
    }
}
