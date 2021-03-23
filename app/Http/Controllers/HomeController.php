<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function wow()
    {
        $cheap = Books::where('price', '<', 10)->get();
        $new = Books::where('year', '>', 2015)->get();
        $classic = Books::where('year', '<', 1950)->get();
        return view('home', compact('cheap','new','classic'));
    }
}