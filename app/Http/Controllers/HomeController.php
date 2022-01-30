<?php

// class HomeController extends BaseController {
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCategories;


use Exception;

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
