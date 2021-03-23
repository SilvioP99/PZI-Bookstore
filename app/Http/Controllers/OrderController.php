<?php

namespace App\Http\Controllers;

use App\OrderShipped;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('roles:superAdministrator,administrator');
    }
    public function Orders($type='')
    {
        if($type =='pending'){
            $orders=Order::where('delivered','0')->get();
        }elseif ($type == 'delivered'){
            $orders=Order::where('delivered','1')->get();
        }else{
            $orders=Order::all();
        }

        return view('orders',compact('orders'));
    }

    public function toggledeliver(Request $request,$orderId)
    {
        $order=Order::find($orderId);

        if($request->has('delivered')){
            $time=Carbon::now()->addMinute(1);

            $order->delivered=$request->delivered;
        }else{
            $order->delivered="0";
        }
        $order->save();

        return back();
    }
}