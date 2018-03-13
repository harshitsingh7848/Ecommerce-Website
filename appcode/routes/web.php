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


/* Route::get('/view-add-products','ProductController@viewAddProducts');
Route::post('/add-product','ProductController@addProduct'); */
	
	Route::get('/', 'IndexController@index');
	Route::get('/login', 'LoginController@index');

	Route::get('/logout','LogoutController@index');
	Route::post('/verification','LoginController@doLogin');

	Route::get('/brand-category','ProductController@brandList');	
	//Route::get('/mobile-phones','ProductController@productList');

	Route::get('/product/{slug}','ProductController@productInfo');

	Route::get('/view-products','ProductController@productFunctions');
	Route::get('/view-add-products','ProductController@viewAddProducts');
	
	Route::post('/add-product','ProductController@addProduct');
	Route::get('/admin','DashboardController@adminDashboard');
	Route::get('/vendors','DashboardController@vendorDashboard');

	Route::get('/delete-product','ProductController@deleteProduct');

	Route::get('/getdetails','UpdateController@getDetails');

	 Route::get('/signup','SignUpController@signup');

	Route::post('/register','AddUserController@addUserToDB');

	Route::post('/verification','LoginController@doLogin');


	Route::get('/new-users','PrivilegesController@index');

	Route::get('/addusertype','UpdateController@update');
	
	Route::get('/update-product','ProductController@updateProduct');

	Route::get('/update-db','ProductController@updateDatabase');

	Route::get('/category','ProductController@category');

	Route::get('/buy','ProductController@buy');

	Route::post('/add-billing-details','ProductController@addBillingDetails');



/* Route::get('/upload', 'testcontroller@uploadForm');
Route::post('/upload', 'testcontroller@uploadSubmit'); */
	

 /* Route::get('/',function(){
	 return view('welcome');
 }); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/