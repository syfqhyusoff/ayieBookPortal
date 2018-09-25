<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use DB;
use App\review;
use App\rating;
use App\genre;

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
        
        $books = Book::all();
        return view ('books.category') -> with ('books', $books);


        /*
        $books = DB::table('book_items')
        ->leftjoin('book_contributor', 'book_contributor.book_id', '=', 'book_items.book_id')
        ->leftjoin('book_author', 'book_author.author_id', '=', 'book_contributor.author_id')
        ->leftjoin('book_publisher', 'book_publisher.publisher_id', '=', 'book_items.publisher_id')
        ->leftjoin('book_category', 'book_category.book_id', '=', 'book_items.book_id')
        ->select('book_items.*','book_publisher.publisher_name', 'book_author.author_fname', 
        'book_author.author_lname', 'book_category.genre_id')
        ->get();
        return view ('books.category') -> with ('books', $books);
        
        */

        /* haikal code
        $books = DB::table('book_items')
        ->join('book_author', 'book_author.author_id', '=', 'book_items.author_id')
        ->join('book_publisher', 'book_publisher.publisher_id', '=', 'book_items.publisher_id')
        ->get();

        $author = DB:: table('book_author')
        ->join('book_items', 'book_items.book_id', '=', 'book_author.book_id')
        ->get();

        return view ('books.category') 
        -> with ('books', $books)
        -> with('author', $author);
        */

    }

    public function testjoin(){


    $books = DB::table('book_items')
        ->leftjoin('book_contributor', 'book_contributor.book_id', '=', 'book_items.book_id')
        ->leftjoin('book_author', 'book_author.author_id', '=', 'book_contributor.author_id')
        ->leftjoin('book_publisher', 'book_publisher.publisher_id', '=', 'book_items.publisher_id')
        ->leftjoin('book_category', 'book_category.book_id', '=', 'book_items.book_id')
        ->select('book_items.*','book_publisher.publisher_name', 'book_author.author_fname', 
        'book_author.author_lname')
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

        $genre=DB::table('book_genre')
        ->leftjoin('book_category', 'book_genre.genre_id', '=', 'book_category.genre_id')
        ->where(['book_id'=>$id])
        ->first();
        
        $contributor = DB::table('book_contributor')
        ->leftjoin('book_author', 'book_contributor.author_id','=','book_author.author_id')
        ->where(['book_id'=>$id])
        ->get();

        $rating = rating::leftjoin('user_reader', 'book_rating.user_id','=','user_reader.user_id')
        ->where(['book_id'=>$id])
        ->where('book_rating.user_id',session('userid'))
        ->first();

        $reviews = review::leftjoin('user_reader', 'book_review.user_id','=','user_reader.user_id')
        ->where('book_review.user_id','!=',session('userid'))
        ->where('book_id',$id)
        ->orderBy('review_date','desc')
        ->paginate(10);
        $userreviews = review::leftjoin('user_reader', 'book_review.user_id','=','user_reader.user_id')
        ->where('book_review.user_id',session('userid'))
        ->where('book_review.book_id',$id)
        ->first();

        return view('books.singlebook') 
        ->with('book', $booksingle)
        ->with('authors',$contributor)
        ->with('ratings',$rating)
        ->with('reviews',$reviews)
        ->with('userreviews',$userreviews)
        ->with('genre', $genre)
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
