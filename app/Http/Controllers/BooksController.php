<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\BookCategorie;
use Illuminate\Support\Facades\DB;
class BooksController extends Controller
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

	}

	public function indexCategory($id)
	{
		$category = DB::table('book_categories')->where('id', $id)->get();

		$book_list = DB::table('books')->where('category_id', $id)->get();
        return view('panel.allbook', ['book_list' => $book_list , 'category' => $category]);

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

		 else{
            $filename = 'book.jpg' ;
        }

		if($request->hasFile('fichierpdf')){
			$fichierpdf = $request->file('fichierpdf');
			$pdfname = time() . '.' . $fichierpdf->getClientOriginalExtension();
			$fichierpdf->move('uploads/files/' , $pdfname);
		 }
		 else{
            $pdfname = 'Version PDF Not Found' ;
        }

		$book = new Book;
		$book->title = $request->title;
		$book->author = $request->author;
		$book->description = $request->description;
		$book->photo = $filename;
		$book->category_id = $request->category;
		$book->fichierpdf = $pdfname ;
		$book->total = $request->total;

		$book->save();
		return redirect()->route('add-books', $book)->with('storeBook' , 'Book Added successfully to Database !!!');

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
		$categories_list = DB::table('book_categories')->get();

		$book = DB::table('books')->where('book_id', $id)->get();

        return view('panel.updatebookform', ['book' => $book , 'categories_list'=> $categories_list]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		
        $id = $request->book_id;
        $book = DB::table('books')->where('book_id', $id)->first();

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move('uploads/books/' , $filename);
         }

		 else{
            $filename = $book->photo;
        }


		if($request->description !=''){
			$desc = $request->description;
		}
		else{
			$desc = $book->description;
		}


        $book_id = $request->book_id;
        $title = $request->title;
        $author = $request->author;
        $description = $desc ;
		$category =$request->category;
        $total = $request->total;
        $photo = $filename;


        DB::table('books')->where('book_id', $book_id)->update(['title' => $title , 'author' => $author , 'description' => $description , 'category_id' => $category , 'total' => $total , 'photo' => $photo]);
        return redirect()->route('all-bookscategoryadmin' ,  [$category])->with('updatebook' , 'Book updated successfully !!!');


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$book = DB::table('books')->where('book_id', $id)->first();
        $cat = $book->category_id;

		DB::table('books')->where('book_id', $id)->delete();

        return redirect()->route('all-bookscategoryadmin' ,  [$cat])->with('deletebook' , 'book has been deleted successfully !!!');
	}

    public function renderAddBooks() {
        $categories_list = DB::table('book_categories')->get();

        return view('panel.addbook')
            ->with('categories_list', $categories_list);
    }


    
}