<?php

namespace App\Http\Controllers;

use App\Models\Book_schools;
use App\Models\Books;
use App\Models\Schools;
use App\Models\Pinjam;
use DB;
use Illuminate\Http\Request;

class BookSchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book_schools::with('Books')->with('Schools')->get();
        // dd ($data);
        // dump($data);
        $p = Pinjam::all();
        foreach($p as $q){
            $pinjam = Book_schools::with('Books')->with('Schools')->where('id', $q->id_pinjam)->get();;

        }
       
        // dd($pinjam);
        $school = Schools::all();
        $book = Books::all();
        return view('home',[
            'book_schools' => $data,
            'book' => $book,
            'schools' => $school,
            'pinjam' => $pinjam
        ])->with('i');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cekbook = Book_schools::where('book_id',$request->book)->count();
        // dd($cekbook);
        $cekschool = Book_schools::where('school_id',$request->school)->count();
        if($cekbook < 2){
            if($cekschool < 3){
            $data = new Book_schools;
            $data->book_id = $request->book;
            $data->school_id = $request->school; 
            $data->save();
            }
            else{
                return '<h1> kuota anda sudah melebihi batas </h1>';
            }
        }
       else{
            return '<h1> Kuota anda melebihi batas </h1>';
       }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book_schools  $book_schools
     * @return \Illuminate\Http\Response
     */
    public function show(Book_schools $book_schools)
    {
        $book_schools;
        // return $book_schools;
        $id = $book_schools->school_id;
        // return $id;
        $data = Book_schools::with('Books')->with('Schools')->where('school_id', $id)->get();
        // dd ($data);
        // dump($data);
        $school = Schools::all();
        $book = Books::all();
        return view('tampil',[
            'book_schools' => $data,
            'book' => $book,
            'schools' => $school
        ])->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book_schools  $book_schools
     * @return \Illuminate\Http\Response
     */
    public function edit(Book_schools $book_schools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book_schools  $book_schools
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book_schools $book_schools)
    {
        
        $cekbook = Book_schools::where('book_id',$request->book)->count();
        // dd($cekbook);
        $cekschool = Book_schools::where('school_id',$request->school)->count();
        if($cekbook < 4){
            if($cekschool < 5){
            $data = Book_schools::find($book_schools)->first();
            $data->book_id = $request->book;
            $data->school_id = $request->school; 
            $data->save();
            }
            else{
                return '<h1> kuota anda sudah melebihi batas </h1>';
            }
        }
       else{
            return '<h1> Kuota anda melebihi batas </h1>';
       }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book_schools  $book_schools
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book_schools $book_schools)
    {
        $data = Book_Schools::find($book_schools)->first();
        $data->delete();

        return redirect()->back();
    }
}
