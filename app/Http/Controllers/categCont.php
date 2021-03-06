<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class categCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $genre = DB::table('book_genre')
       ->get();
       return $genre;


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        /* $books = DB::table('book_items')
        ->leftjoin('book_category', 'book_category.book_id','=','book_items.book_id')
        ->leftjoin('book_genre', 'book_genre.genre_id', '=', 'book_category.genre_id')
        ->get();*/
        
        $books = DB::table('book_items')
        ->leftjoin('book_contributor', 'book_contributor.book_id', '=', 'book_items.book_id')
        ->leftjoin('book_author', 'book_author.author_id', '=', 'book_contributor.author_id')
        ->leftjoin('book_publisher', 'book_publisher.publisher_id', '=', 'book_items.publisher_id')
        ->leftjoin('book_category', 'book_category.book_id', '=', 'book_items.book_id')
        ->leftjoin('book_genre', 'book_genre.genre_id', '=', 'book_category.genre_id')
        ->select('book_items.*','book_publisher.publisher_name', 'book_author.author_fname','book_genre.*')
        ->where('book_genre.genre_id',$id)
        ->get();

        return view('books.category') 

        ->with('books', $books);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
