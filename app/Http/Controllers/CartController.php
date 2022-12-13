<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = 1;

        if ($request->session()->has('loggedInUser')) {
            $prod_check = Product::where('id', $product_id)->exists();

            if ($prod_check) {
                if (Cart::where('prod_id', $product_id)->where('user_id', session('loggedInUser'))->exists()) {
                    return response()->json([
                        'status' => 401,
                        'messages' => 'Already added to cart'
                    ]);
                } else {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->user_id = session('loggedInUser');
                    $cartItem->save();
                    return response()->json([
                        'status' => 200,
                        'messages' => 'Added to cart'
                    ]);
                }
            }
        } else {
            return response()->json([
                'status' => 400,
                'messages' => 'Login to Continue'
            ]);
        }
    }
}
