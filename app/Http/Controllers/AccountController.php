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
			'firstname' 	=> 'required',
			'lastname' 	=> 'required',
			'email' 	=> 'required',
			'password'	=> 'required',
			'role' 	=> 'required'

		]);
		if(!$validator) {
			// Redirect to the sign in page
			return Redirect::route('login')
				->withErrors($validator)
				->withInput();   // redirect the input

		} else {

			$remember = ($request->has('remember')) ? true : false;
			$auth = Auth::attempt(array(
				'firstname' => $request->get('firstname'),
				'lastname' => $request->get('lastname'),
				'email' => $request->get('email'),
				'password' => $request->get('password'),
				'role' => $request->get('role'),
			), $remember);
		} 

		if($auth) {
			
			return Redirect::intended('home');

		} else {
			
			return Redirect::route('login')
				->with('global', 'Wrong Email or Wrong Password.');
		}

		return Redirect::route('login')
			->with('global', 'There is a problem. Have you activated your account?');
	}

	/* Submitting the Create User form (POST) */
	public function postCreate(Request $request) {
		// dd($request->all());
		$validator = $request->validate([
				'firstname'		=> 'required|max:50',
				'lastname'		=> 'required|max:50',
				'email'		=> 'required|max:255|email|unique:users',
				'password'		=> 'required',
				'role'		=> 'required'

		]);

		if(!$validator) {
			return Redirect::route('account-create')
				->withErrors($validator)
				->withInput();   // fills the field with the old inputs what were correct

		} else {
			// create an account
			$firstname	= $request->get('firstname');
			$lastname	= $request->get('lastname');
			$email	= $request->get('email');
			$password 	= $request->get('password');
			$role	= $request->get('role');

			$userdata = User::create([
				'firstname' 	=> $firstname,
				'lastname' 	=> $lastname,
				'email' 	=> $email,
				'password' 	=> Hash::make($password),
				'role' 	=> $role	// Changed the default column for Password
			]);

			if($userdata) {			


				return Redirect::route('login')
					->with('global', 'Your account has been created. We have sent you an email to activate your account');				
			}
		}
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
