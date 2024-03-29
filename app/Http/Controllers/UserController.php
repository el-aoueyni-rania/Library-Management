<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listuser = DB::table('users')->get();

        return view('panel.indexuser', ['listuser' => $listuser]);
    }

    public function profil()
    {

        $user_id = Auth::id();

        $listuser = DB::table('users')->where('id', $user_id)->get();

        return view('panelUser.profil', ['listuser' => $listuser]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit()
    {
        return view('panelUser.updateprofilform');
    }

    public function updateuserform($id)
    {
        $user = DB::table('users')->where('id', $id)->get();

        return view('panel.updateuserform', ['user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request)
    {
        $user_id = Auth::id();
        $user = DB::table('users')->where('id', $user_id)->first();
    
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move('uploads/users/' , $filename);
         }
        else{
            $filename = $user->photoU;
        }

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $photoU = $filename;


        DB::table('users')->where('id', $user_id)->update(['firstname' => $firstname , 'lastname' => $lastname , 'email' => $email , 'photoU' => $photoU]);
        return redirect()->route('profil')->with('updateprofil' , 'Profil updated successfully !!!');


    }


    

    public function updateuser(Request $request)
    {
        $user_id = $request->id;
        $user = DB::table('users')->where('id', $user_id)->first();


        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move('uploads/users/' , $filename);
         }

         else{
            $filename = $user->photoU;
        }

        $id = $request->id;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $role = $request->role;
        $photoU = $filename;


        DB::table('users')->where('id', $id)->update(['firstname' => $firstname , 'lastname' => $lastname , 'email' => $email , 'role' => $role , 'photoU' => $photoU]);
        return redirect()->route('listuser')->with('updateuser' , 'User updated successfully !!!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('listuser')->with('deleteuser' , 'User has been deleted successfully !!!');
    }
}
