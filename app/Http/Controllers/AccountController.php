<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;


class AccountController extends Controller
{
    public function account($id)
        {
            $user = User::findOrFail($id);
            $user_orders = Order::where('user_id',$user->id)->get();

            return view('account', compact('user', 'user_orders'));
        }


    public function edit(Request $request, $id, User $user)
    {
        $data = $request->all();
        Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();

        $name = $request->input('name');
        $surname = $request->input('surname');
        $role = $request->input('role');
        $email = $request->input('email');
        $data["password"] = Hash::make($data["password"]);
        
        $data['user_id'] = auth()->user()->id;

        DB::update('UPDATE users SET name = ?,surname=?,email=? WHERE id = ?',[$name,$surname,$email,$id]);

        return redirect()->route('account', Auth::user()->id);
    } 
}