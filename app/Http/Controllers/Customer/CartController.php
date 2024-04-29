<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::getCartByUser()
            ->get();

        return view('customers.cart', compact('carts'));
    }
}
