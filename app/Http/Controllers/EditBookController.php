<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class EditBookController extends Controller 
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('roles:administrator,superAdministrator');
    }

    public function index()
    {
        $users = DB::select('SELECT * FROM books');
        return view('editbook',['books'=>$books]);
    }
    public function show($id) 
    {
        $books = DB::select('SELECT * FROM books WHERE id = ?',[$id]);
        return view('editbook',['books'=>$books]);
    }
    public function editbook(Request $request,$id)
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
}