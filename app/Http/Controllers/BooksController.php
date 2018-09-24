<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use DB;
use App\review;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Welcome to Laravel!';
        return view ('books.index', compact('title'));
       
    }

    public function category()
    {
        //return Book::all();
        //return view ('books.category') -> with ('books', $books);
        //$books = Book::all();
        $books = DB::table('book_items')
        ->leftjoin('book_contributor', 'book_contributor.book_id', '=', 'book_items.book_id')
        ->leftjoin('book_author', 'book_author.author_id', '=', 'book_contributor.author_id')
        ->leftjoin('book_publisher', 'book_publisher.publisher_id', '=', 'book_items.publisher_id')
        ->select('book_items.*','book_publisher.publisher_name', 'book_author.author_fname')
    
        ->get();

        //  $name = $books->.' '.$student->surname;
        
        return view ('books.category') -> with ('books', $books);
    }

    public function testjoin(){

    /*->select('book_items.book_title','book_items.book_isbn','book_items.book_page','book_items.book_year',
    'book_items.book_location','book_items.book_material', 'book_items.book_status', 'book_items.book_unit',
    'book_items.image_url', 'book_publisher.publisher_name', 'book_author.author_fname')
    */

    $books = DB::table('book_items')
    ->join('book_contributor', 'book_contributor.book_id', '=', 'book_items.book_id')
    ->join('book_author', 'book_author.author_id', '=', 'book_contributor.author_id')
    ->join('book_publisher', 'book_publisher.publisher_id', '=', 'book_items.publisher_id')
    ->distinct(['book_items.book_id'])
    ->get();
    return $books;

    

    

    }



    public function about()
    {
        return view ('books.about');
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
        $booksingle = DB::table('book_items')
        ->leftjoin('book_publisher', 'book_items.publisher_id','=','book_publisher.publisher_id')
        ->where(['book_id'=>$id])
        ->first();

        $contributor = DB::table('book_contributor')
        ->leftjoin('book_author', 'book_contributor.author_id','=','book_author.author_id')
        ->where(['book_id'=>$id])
        ->get();

        $rating = DB::table('book_rating')
        ->where(['book_id'=>$id])
        ->first();

        $reviews = review::leftjoin('user_reader', 'book_review.user_id','=','user_reader.user_id')
        ->where('book_review.user_id','!=','5555')
        ->where('book_id',$id)
        ->orderBy('review_date','desc')
        ->paginate(10);
        $userreviews = review::leftjoin('user_reader', 'book_review.user_id','=','user_reader.user_id')
        ->where('book_review.user_id','5555')
        ->where('book_review.book_id',$id)
        ->first();

        return view('books.singlebook') 
        ->with('book', $booksingle)
        ->with('authors',$contributor)
        ->with('ratings',$rating)
        ->with('reviews',$reviews)
        ->with('userreviews',$userreviews)
        ;
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
