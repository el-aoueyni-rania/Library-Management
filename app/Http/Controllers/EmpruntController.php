<?php

namespace App\Http\Controllers;

use App\Emprunt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmpruntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listemprunt = DB::table('emprunts')->get();

        return view('panel.indexemprunt', ['listemprunt' => $listemprunt]);
    }


    public function indexempruntuser()
    {

        $user_id = Auth::id();

        $listemprunt = DB::table('emprunts')->where('user_id', $user_id)->get();

        return view('panelUser.indexEmpruntUser', ['listemprunt' => $listemprunt]);
    }


    public function empruntbook($id)
	{
        
		$book = DB::table('books')->where('book_id', $id)->get();
		
        return view('panelUser.empruntbook', ['book' => $book ]);

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
        $user_id = Auth::id();


        $emprunt = new Emprunt() ; 
        $emprunt->user_id = $user_id;
        $emprunt->book_id = $request->id_book;
        $emprunt->emailU = $request->emailU;
        $emprunt->titleB = $request->titleB;
        $emprunt->Date_Emprunt = $request->Date_Emprunt;
        $emprunt->Date_retour = $request->Date_retour;

        $emprunt->save();
        return redirect()->route('listempruntuser' , $emprunt)->with('storeEmprunt' , 'Emprunt Book has been created successfully !!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
