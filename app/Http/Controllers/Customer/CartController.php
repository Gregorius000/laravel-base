<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::getCartByUser()
            ->get();

        return view('customers.cart', compact('carts'));
    }

    public function changeCart(Request $request)
    {
        $cart = Cart::find($request->id);

        try {
            $cart->update([
                'qty' => $request->qty
            ]);

            return response()->json(['message' => 'Success change cart quantity'], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    public function getTotalCart()
    {
        $carts = Cart::getCartByUser()->get();

        $total = 0;

        foreach ($carts as $key => $item) {
            $total += $item->total_qty * $item->price;
        }

        return response()->json(['total' => $total], 200);
    }
}
