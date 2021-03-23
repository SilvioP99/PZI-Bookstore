<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function shipping()
    {
        return view('shipping');
    }
    public function payment()
    {
        return view('payment');
    }
    public static function storePayment(){
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0
        ]);

        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }

        return redirect('/')->with('status', 'Kupnja uspješna!');
  }
}