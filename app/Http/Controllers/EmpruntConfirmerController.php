<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EmpruntConfirmer;


class EmpruntConfirmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empruntconfirmer_list = DB::table('emprunt_confirmers')->get();

        return view('panel.empruntconfirmer', ['empruntconfirmer_list' => $empruntconfirmer_list]);
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
    public function store($id)
    {
        $emprunt = DB::table('emprunts')->where('id', $id)->first();

        $book_id = $emprunt->book_id;

        $emprunttt = new EmpruntConfirmer() ; 
        $emprunttt->user_idC = $emprunt->user_id;
        $emprunttt->firstnameUC = $emprunt->firstnameU;
        $emprunttt->lastnameUC = $emprunt->lastnameU;
        $emprunttt->emailUC = $emprunt->emailU;
        $emprunttt->titleBC = $emprunt->titleB;
        $emprunttt->Date_EmpruntC = $emprunt->Date_Emprunt;
        $emprunttt->Date_retourC = $emprunt->Date_retour;

        $emprunttt->save();

        DB::table('emprunts')->where('id', $id)->delete();

        DB::table('books')->where('book_id', $book_id)->decrement('total');

        
        return redirect()->route('listempruntconfirmer', $emprunttt)->with('storeempruntconfirmer' , 'Emprunt confirmer successfully !!!');
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
        DB::table('emprunt_confirmers')->where('id', $id)->delete();

        return redirect()->route('listempruntconfirmer')->with('deleteempruntconfirmer' , 'Emprunt confirmer has been deleted successfully !!!');

    }
}
