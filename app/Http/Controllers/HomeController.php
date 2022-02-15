<?php

// class HomeController extends BaseController {
namespace App\Http\Controllers;

class HomeController extends Controller
{


	public function home(){	
		return view('panel.index');
	}
   
    public function welcome()
    {
        return view('welcome');
    }
}
