<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Books;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator;

class AddBookController extends Controller
{
    //

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('roles:superAdministrator,administrator');
    }

    public function index() {
        $books = DB::select('SELECT * FROM books');
        return view('addbooks',['books'=>$books]);
    }

    public function delete($id) {
        DB::table("books")->where("id", $id)->delete();
        return redirect('addbooks');
    }

    public function get ($id, Request $request){
        $book = DB::table("books")->where("id", $id)->get();
        if ($request->ajax()) {
            return Response::json($book);
        } else {
            abort(403, "Nemate direktan pristup ovom djelu sustava");
        }
    }

    public function edit(Request $request,$id)
    {
        $title = $request->input('title');
        $author = $request->input('author');
        $genre = $request->input('genre');
        $price = $request->input('price');
        $pages = $request->input('pages');
        $year = $request->input('year');
        $image = $request->input('image');
        DB::update('UPDATE books SET title = ?,author=?,genre=?,price=?,pages=?,year=?,image=? WHERE id = ?',[$title,$author,$genre,$price,$pages,$year,$image,$id]);
        return redirect('addbooks')->with('message' ,'Uspješno uređivanje podataka.');
       
    }

    public function store(Request $request){
        $data = $request->all();
            Books::create([
                'title' => $data['title'],
                'author' => $data['author'],
                'genre' => $data['genre'],
                'price' => $data['price'],
                'pages' => $data['pages'],
                'year' => $data['year'],
                'image' => $data['image'],
            ]);
        
    }

    public function booksearch()
   {
       $search_text = $_GET['query'];
       $books = Books::where('title', 'LIKE', '%' .$search_text. '%')->get();
       return view('booksearch',['books'=>$books]);
   }
}