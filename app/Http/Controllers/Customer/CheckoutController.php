<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('customers.checkout');
    }

    public function process(Request $request)
    {
        $cart = Cart::getTotalCheckoutByUser()->first();

        try {
            $transaction = Transaction::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'zip_code' => $request->zip_code,
                'email_address' => $request->email_address,
                'phone_number' => $request->phone_number,
                'total_checkout' => $request->total_checkout,
                'status' => "pending",
                'total_checkout' => $cart->total_checkout
            ]);

            $cart = Cart::getCartByUser()->get();

            foreach ($cart as $key => $item) {
                DetailTransaction::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $item->product_id,
                    'user_id' => $item->user_id,
                ]);

                $item->delete();
            }

            return redirect()->route('customer.products'); // sementara kesini dulu
        } catch (\Throwable $th) {
            dd($th->getMessage()); // sementara kita tampilkan error
            return redirect()->back();
        }
    }
}