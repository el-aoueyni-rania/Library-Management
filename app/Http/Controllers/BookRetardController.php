<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BookRetard;


class BookRetardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empruntretard_list = DB::table('book_retards')->get();

        return view('panel.retard', ['empruntretard_list' => $empruntretard_list]);
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
        $empruntC = DB::table('emprunt_confirmers')->where('id', $id)->first();


        $retard = new BookRetard() ; 
        $retard->user_idR = $empruntC->user_idC;
        $retard->book_idR = $empruntC->book_idC;
        $retard->emailR = $empruntC->emailC;
        $retard->titleR = $empruntC->titleC;
        $retard->Date_EmpruntR = $empruntC->Date_EmpruntC;
        $retard->Date_retourR = $empruntC->Date_retourC;

        $retard->save();

        DB::table('emprunt_confirmers')->where('id', $id)->delete();


        
        return redirect()->route('listeretard', $retard)->with('storeempruntretard' , 'Add Emprunt retard  successfully !!!');
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
        DB::table('book_retards')->where('id', $id)->delete();

        return redirect()->route('listeretard')->with('deleteempruntretard' , 'Emprunt retard has been deleted successfully !!!');
    }
}
