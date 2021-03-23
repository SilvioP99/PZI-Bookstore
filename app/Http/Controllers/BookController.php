<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Books;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Books::all()->jsonSerialize());
    }

    public function id($id)
    {
        $book = Books::find($id);

        return view('book', compact('book'));
    }

    public function list()
    {
        $books = DB::select('SELECT * FROM books');
        return view('books',['books'=>$books]);
    }

    public function drama()
   {
       $books = Books::where('genre', 'LIKE', 'drama')->get();
       return view('books', compact('books'));
   }
   public function fantastika()
   {
       $books = Books::where('genre', 'LIKE', 'fantastika')->get();
       return view('books', compact('books'));
   }
   public function krimi()
   {
       $books = Books::where('genre', 'LIKE', 'Krimi')->get();
       return view('books', compact('books'));
   }
   public function ljubavni()
   {
       $books = Books::where('genre', 'LIKE', 'ljubavni')->get();
       return view('books', compact('books'));
   }
   public function povijesni()
   {
       $books = Books::where('genre', 'LIKE', 'povijesni')->get();
       return view('books', compact('books'));
   }
   public function psihološki()
   {
       $books = Books::where('genre', 'LIKE', 'psihološki')->get();
       return view('books', compact('books'));
   }
   public function pustolovni()
   {
       $books = Books::where('genre', 'LIKE', 'pustolovni')->get();
       return view('books', compact('books'));
   }
   public function triler()
   {
       $books = Books::where('genre', 'LIKE', 'triler')->get();
       return view('books', compact('books'));
   }
   public function vestern()
   {
       $books = Books::where('genre', 'LIKE', 'vestern')->get();
       return view('books', compact('books'));
   }
   public function scifi()
   {
       $books = Books::where('genre', 'LIKE', 'scifi')->get();
       return view('books', compact('books'));
   }

   public function search()
   {
       $search_text = $_GET['query'];
       $books = Books::where('title', 'LIKE', '%' .$search_text. '%')->get();
       return view('finder', compact('books'));
   }
}