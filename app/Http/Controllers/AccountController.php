<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Exception;

class AccountController extends Controller
{
    	### Sign In
	/* After submitting the sign-in form */
	public function postSignIn(Request $request) {
		$validator = $request->validate([
			'email' 	=> 'required',
			'password'	=> 'required'
		]);
		if(!$validator) {
			// Redirect to the sign in page
			return Redirect::route('login')
				->withErrors($validator)
				->withInput();   // redirect the input

		} else {

			$remember = ($request->has('remember')) ? true : false;
			$auth = Auth::attempt(array(
				'email' => $request->get('email'),
				'password' => $request->get('password')
			), $remember);
		} 

		if($auth) {
			
			return Redirect::intended('home');

		} else {
			
			return Redirect::route('login')
				->with('global', 'Wrong Email or Wrong Password !!!');
		}

		return Redirect::route('login')
			->with('global', 'There is a problem. Have you activated your account?');
	}

	public function getSignIn() {
		return view('account.signin');
	}

	/* Viewing the form (GET) */
	public function getCreate() {
		return view('account.create');
	}

	### Sign Out
	public function getSignOut() {
		Auth::logout();
		return Redirect::route('welcome');
	}

}
