<?php

namespace App\Http\Controllers;

use App\Models\BookCategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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


    public function renderAddBookCategory(Type $var = null)
	{
        return view('panel.addbookcategory');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photoC')){
            $photo = $request->file('photoC');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move('uploads/categories/' , $filename);
         }

        $category = new BookCategories;
        $category->category = $request->category;
        $category->photoC = $filename;
        $category->save();
        return redirect()->route('add-book-category', $category)->with('storeCategory' , 'Category Added successfully to Database !!!');

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookCategories  $bookCategories
     * @return \Illuminate\Http\Response
     */
    public function show(BookCategories $bookCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookCategories  $bookCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(BookCategories $bookCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookCategories  $bookCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookCategories $bookCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookCategories  $bookCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookCategories $bookCategories)
    {
        //
    }
}
