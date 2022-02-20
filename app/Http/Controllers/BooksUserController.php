<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class BooksUserController extends Controller
{
    
    public function __construct(){

		$this->filter_params = array('category_id');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$book_list = DB::table('books')->get();

        return view('panelUser.allbookuser', ['book_list' => $book_list]);

	}
	public function indexCategory($id)
	{
		$category = DB::table('book_categories')->where('id', $id)->get();

		$book_list = DB::table('books')->where('category_id', $id)->get();
        return view('panelUser.bookscategory', ['book_list' => $book_list , 'category' => $category]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
	}
			


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function renderAddBookuser() {
        $db_control = new HomeController();

        return view('panelUser.addbookuser')
            ->with('categories_list', $db_control->categories_list);
    }

	
	public function search()
    {
        $q = request()->input('q');

        $books = Book::where('title' , 'like' , "%$q%")
              ->orwhere('author' , 'like' , "%$q%")->get();
              return view('panelUser.search')->with('books' , $books);
    }


	public function download($id)
	{
		$book = DB::table('books')->where('book_id', $id)->first();

		$file = $book->fichierpdf;

        return response()->download(public_path('uploads/files/'.$file)) ;
	}
}
