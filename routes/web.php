<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/login', 'AccountController@getSignIn')->name('login');
Route::get('/', function () {
    return view('welcome');
});

// Unauthenticated group 
Route::group(array('before' => 'guest'), function() {
 
	// CSRF protection 
	Route::group(array('before' => 'csrf'), function() {

		// Create an account (POST) 
		Route::post('/create', array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

		// Create user (POST) 
		Route::post('/create', array(
			'as' => 'user-create-post',
			'uses' => 'Auth\RegisterController@store'
		));

		// Sign in (POST) 
		Route::post('/sign-in', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));

		
	});


	
	// Create an account (GET) 
	Route::get('/create', array(
		'as' 	=> 'account-create',
		'uses' 	=> 'AccountController@getCreate'
	));

	
    // Render search books panel
    Route::get('/book', array(
        'as' => 'search-book',
        'uses' => 'BooksController@searchBook'
    ));    
	
});

// Main books Controlller left public so that it could be used without logging in too
Route::resource('/books', 'BooksController');





// Authenticated group 
// Route::group(array('before' => 'auth'), function() {
Route::group(['middleware' => ['auth']] , function() {

	// Home Page of Control Panel Admmin
	Route::get('/home',array(
		'as' 	=> 'home',
		'uses'	=> 'HomeController@home'
	));
	
	// Render All categories panel admin
	Route::get('/all-categories',array(
		'as' 	=> 'all-categories',
		'uses'	=> 'CategoryController@allcategories'
	));	

	// Render All Books panel admin by category
    Route::get('/all-bookscategoryadmin/{cat_id}', array(
		'as' => 'all-bookscategoryadmin',
		'uses' => 'BooksController@indexCategory'
		));


	// Render All Books panel admin
    Route::get('/all-books', array(
        'as' => 'all-books',
        'uses' => 'BooksController@renderAllBooks'
	));

	// Render Add Books panel admin
    Route::get('/add-books', array(
        'as' => 'add-books',
        'uses' => 'BooksController@renderAddBooks'
	));

	Route::post('/add-bookform', array(
        'as' => 'add-bookform',
        'uses' => 'BooksController@store'
	));

	//  Add Category panel admin
	Route::get('/add-book-category', array(
        'as' => 'add-book-category',
        'uses' => 'CategoryController@index'
	));
	

	Route::post('/add-categoryform', array(
        'as' => 'add-categoryform',
        'uses' => 'CategoryController@store'
	)); 


	// Render All Books panel admin by category
	Route::get('/bookBycategory/{cat_id}', array(
        'as' => 'bookBycategory',
        'uses' => 'BooksController@BookByCategory'
    ));

    // Render All Books panel admin by category
    Route::get('/listuser', array(
	'as' => 'listuser',
	'uses' => 'UserController@index'
    ));
	
    // Render All emprunts panel admin 
    Route::get('/listemprunt', array(
	'as' => 'listemprunt',
	'uses' => 'EmpruntController@index'
    ));


   
  // Render confirmer panel admin 
  Route::any('/addempruntconfirmer/{emp_id}', array(
	'as' => 'addempruntconfirmer',
	'uses' => 'EmpruntConfirmerController@store'
    ));

	// Render list emprunts confirmer panel admin 
	Route::get('/listempruntconfirmer', array(
		'as' => 'listempruntconfirmer',
		'uses' => 'EmpruntConfirmerController@index'
		));
	

  // Render delete emprunts confirmer panel admin 
  Route::any('/deleteempruntconfirmer/{empc_id}', array(
	'as' => 'deleteempruntconfirmer',
	'uses' => 'EmpruntConfirmerController@destroy'
    ));

	// Render add emprunts retard panel admin 
	Route::any('/ajoutretard/{ret_id}', array(
		'as' => 'ajoutretard',
		'uses' => 'BookRetardController@store'
		));

  // Render All book en retard panel admin 
  Route::get('/listeretard', array(
	'as' => 'listeretard',
	'uses' => 'BookRetardController@index'
    ));


	// Render delete emprunts retard panel admin 
	Route::any('/deleteempruntretard/{empr_id}', array(
		'as' => 'deleteempruntretard',
		'uses' => 'BookRetardController@destroy'
		));
	







	// Home Page of Control Panel User
	Route::get('/homeUser',array(
		'as' 	=> 'homeUser',
		'uses'	=> 'CategoryController@homeUser'
	));	


	// Render Add Books panel user
    Route::get('/add-bookuser', array(
        'as' => 'add-bookuser',
        'uses' => 'BooksUserController@renderAddBookuser'
	));

	 Route::post('/add-bookuserform', array(
        'as' => 'add-bookuserform',
        'uses' => 'BooksUserController@store'
	)); 


	// Render All Books panel user
    Route::get('/all-booksuser', array(
	'as' => 'all-booksuser',
	'uses' => 'BooksUserController@index'
    ));



    // Render All Books panel user by category
    Route::get('/all-bookscategoryuser/{cat_id}', array(
	'as' => 'all-bookscategoryuser',
	'uses' => 'BooksUserController@indexCategory'
    ));

   // Render search book
   Route::get('/search_book', array(
	'as' => 'search_book',
	'uses' => 'BooksUserController@search'
    ));


   // Render profil user
   Route::get('/profil', array(
	'as' => 'profil',
	'uses' => 'UserController@profil'
    ));


  // Render All emprunts panel user 
  Route::get('/listempruntuser', array(
	'as' => 'listempruntuser',
	'uses' => 'EmpruntController@indexempruntuser'
    ));


  // Render emprunt form panel user
   Route::get('/empruntbook/{book_id}', array(
	'as' => 'empruntbook',
	'uses' => 'EmpruntController@empruntbook'
    ));


  // Render emprunter book panel user 
   Route::post('/bookempruntform', array(
	'as' => 'bookempruntform',
	'uses' => 'EmpruntController@store'
    ));
















	// Sign out (GET) 
    Route::get('/sign-out', array(
    	'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
    ));

});