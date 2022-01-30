<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\Books;
use App\Models\Issue;
use App\Models\Branch;
use App\Models\Student;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\BookCategories;
use App\Models\StudentCategories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\HomeController;
use Exception;

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
		

			 if($request->hasFile('photo')){
				$photo = $request->file('photo');
				$filename = time() . '.' . $photo->getClientOriginalExtension();
				$photo->move('uploads/books/' , $filename);
			 }


			$user_id = Auth::id();

			$book = new Books;
			$book->title = $request->title;
			$book->author = $request->author;
			$book->description = $request->description;
			$book->photo = $filename;
			$book->category_id = $request->category;
			$book->added_by =$user_id ;
			$book->total = $request->total;
			
			$book->save();
			return redirect()->route('add-bookuser', $book)->with('storeBookUser' , 'Book Added successfully to Database !!!');

			}
			


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($string)
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

        $books = Books::where('title' , 'like' , "%$q%")
              ->orwhere('author' , 'like' , "%$q%")->get();
              return view('panelUser.search')->with('books' , $books);
    }
}
