<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::post(
	    'projects/search', 
	    array('as' => 'projects.search', 'uses' => 'ProjectController@postSearch'));
 // Authentication Routes...

        $this->get('login', 'Auth\AuthController@showLoginForm');
        $this->post('login', 'Auth\AuthController@login');
        $this->get('logout', 'Auth\AuthController@logout');

        // Registration Routes...
        $this->get('register', 'Auth\AuthController@showRegistrationForm');
        $this->post('register', 'Auth\AuthController@register');

        // Password Reset Routes...
        $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
        $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
        $this->post('password/reset', 'Auth\PasswordController@reset');

// Route::get('/home', 'HomeController@index');

Route::get('/', 'ProjectController@index');

Route::get('/register', function () {
    if (Auth::user()) {
        return view('auth.register'); //Page which you want to show for loged user.
    } else {
        return "Sorry Do Not Have Access this resource"; //You can redirect from here, if user is not logged in
    }
});

Route::group(['prefix' => 'project', 'middleware' => 'auth'], function () {
	Route::get('create',  	   	    ['as' 	=>'createProject',          'uses'=> 'ProjectController@create']);
	Route::Post('store',			['as'	=>'storeProject', 			'uses'=> 'ProjectController@store']);
	Route::get('{id}/edit', 		['as'   =>'editProject', 			'uses'=> 'ProjectController@edit']);
	Route::put('{id}', 			    ['as' 	=> 'updateProject',	        'uses'=> 'ProjectController@update']);
	Route::get('/List',			  	['as'	=>'ListProject',  			'uses'=> 'DatatablesController@index'] );
	Route::get('{id}',				['as'	=>'showProject', 			'uses'=> 'ProjectController@show']);
	Route::DELETE('{id}',           ['as'   => 'deleteProject',			'uses'=> 'ProjectController@destroy']);	
});