<?php

namespace App\Http\Controllers;
use App\User;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userBookIndex()
    {
        $userid = auth()->user()->id;
        $getBook = DB::table('users')
            ->join('books', 'users.id', '=', 'books.user_id')
            ->select('books.*')
            ->where('books.user_id' , $userid)->get();
        return view('user.books')->with('getBook', $getBook);
    }

    public function userBookSave(Request $request)
    {
        $book = new Book();
        $book->title = $request->book_title;
        $book->link = $request->book_link;
        $book->user_id = $request->user_id;
        $bookSave = $book->save();

        if($bookSave){
            return redirect('/dashboard/books')->with('message','Record Have Been Added');
        }
    }

    public function userBookDelete($id){
        $book = Book::find($id);
        $bookDeleted = $book->delete();
        if($bookDeleted){
            return redirect('/dashboard/books')->with('deleted','Deleted Successfully!!');
        }
    }

    public function index()
    {
        //
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
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
