<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        Address::create([
            'addressline' => request('addressline'),
            'city' => request('city'),
            'zip' => request('zip'),
            'phone' => request('phone'),
            'user_id' => auth()->id()
        ]);
        return redirect()->route('checkout.payment');
    }
}