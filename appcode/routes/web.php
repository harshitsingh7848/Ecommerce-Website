<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can
 register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



	Route::get('/', 'IndexController@checkAdmin');
	Route::get('/', 'IndexController@index');
	Route::get('/login', 'LoginController@index');
	Route::post('/verification','LoginController@doLogin');


	Route::get('/admin','DashboardController@adminDashboard');
	Route::get('/vendors','DashboardController@vendorDashboard');


	 Route::get('/signup','SignUpController@signup');

	Route::post('/register','AddUserController@addUserToDB');

	Route::post('/verification','LoginController@doLogin');


	Route::get('/newUsers','PrivilegesController@index');

	Route::get('/addusertype','UpdateController@update');



 /* Route::get('/',function(){
	 return view('welcome');
 }); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/