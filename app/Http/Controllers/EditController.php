<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class EditController extends Controller 
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('role:superAdministrator');
    }

    public function index()
    {
        $users = DB::select('SELECT * FROM users');
        return view('edit',['users'=>$users]);
    }
    public function show($id) 
    {
        $users = DB::select('SELECT * FROM users WHERE id = ?',[$id]);
        return view('edit',['users'=>$users]);
    }
    public function edit(Request $request,$id)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $role = $request->input('role');
        $email = $request->input('email');
        DB::update('UPDATE users SET name = ?,surname=?,role=?,email=? WHERE id = ?',[$name,$surname,$role,$email,$id]);
        return redirect('users')->with('message' ,'Uređivanje podataka uspjepno!');
       
    }
}