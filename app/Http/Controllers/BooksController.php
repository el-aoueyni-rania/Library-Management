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
use App\Http\Controllers\HomeController;
use Exception;

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

		$book_list = Books::select('book_id','title','author','description','book_categories.category')
		->join('book_categories', 'book_categories.id', '=', 'books.category_id')
			->orderBy('book_id')->get();
		// dd($book_list);
		// $this->filterQuery($book_list);

		// $book_list = $book_list->get();

		for($i=0; $i<count($book_list); $i++){

	        $id = $book_list[$i]['book_id'];
	        $conditions = array(
	        	'book_id'			=> $id,
	        	'available_status'	=> 1
        	);

	        $book_list[$i]['total_books'] = Issue::select()
	        	->where('book_id','=',$id)
	        	->count();

	        $book_list[$i]['avaliable'] = Issue::select()
	        	->where($conditions)
	        	->count();
		}

        return $book_list;
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
		$book_list = Books::select('book_id','title','author','description','book_categories.category')
		->join('book_categories', 'book_categories.id', '=', 'books.category_id')
			->where('title', 'like', '%' . $string . '%')
			->orWhere('author', 'like', '%' . $string . '%')
			->orderBy('book_id');

		$book_list = $book_list->get();

		foreach($book_list as $book){
			$conditions = array(
				'book_id'			=> $book->book_id,
				'available_status'	=> 1
			);

			$count = Issue::where($conditions)
				->count();

			$book->avaliability = ($count > 0) ? true : false;
		}

        return $book_list;
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

    public function renderAddBooks() {
        $categories_list = DB::table('book_categories')->get();

        return view('panel.addbook')
            ->with('categories_list', $categories_list);
    }


    public function renderAllBooks() {
        $db_control = new HomeController();

		return view('panel.allbook')
            ->with('categories_list', $db_control->categories_list);
	}
	
	public function BookByCategory($cat_id)
	{
		$book_list = Books::select('book_id','title','author','description','book_categories.category')
		->join('book_categories', 'book_categories.id', '=', 'books.category_id')
			->where('category_id', $cat_id)->orderBy('book_id');

			$book_list = $book_list->get();

			for($i=0; $i<count($book_list); $i++){

				$id = $book_list[$i]['book_id'];
				$conditions = array(
					'book_id'			=> $id,
					'available_status'	=> 1
				);
	
				$book_list[$i]['total_books'] = Issue::select()
					->where('book_id','=',$id)
					->count();
	
				$book_list[$i]['avaliable'] = Issue::select()
					->where($conditions)
					->count();
			}
	
			return $book_list;
	}

}
