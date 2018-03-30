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

	Route::get('/logout','LogoutController@index')->middleware('guest');
	Route::post('/verification','LoginController@doLogin');

	Route::get('/brand-category','ProductController@brandList');
	//Route::get('/mobile-phones','ProductController@productList');

	Route::get('/product/{slug}','ProductController@productInfo');

	Route::get('/view-products','ProductController@productFunctions')->middleware('guest');
	Route::get('/view-add-products','ProductController@viewAddProducts')->middleware('guest');
	
	Route::post('/add-product','ProductController@addProduct')->middleware('guest');
	Route::get('/admin','DashboardController@adminDashboard')->middleware('guest');
	Route::get('/vendors','DashboardController@adminDashboard')->middleware('guest');
	/* Route::get('/cart','')
		
	}); */
	Route::get('/delete-product','ProductController@deleteProduct')->middleware('guest');

	Route::get('/getdetails','UpdateController@getDetails')->middleware('guest');

	 Route::get('/signup','SignUpController@signup');

	Route::post('/register','AddUserController@addUserToDB');
	Route::post('/admin/register','AddUserController@addUserToDB')->middleware('guest');

		
	Route::post('/add-privileges','PrivilegesController@addPrivileges')->middleware('guest');		
	Route::get('/users','PrivilegesController@userList')->middleware('guest');
	Route::get('/employees','PrivilegesController@index')->middleware('guest');
	Route::get('/new-users','PrivilegesController@newUsers')->middleware('guest');

	Route::get('/addusertype','UpdateController@update')->middleware('guest');
	
	Route::get('/update-product','ProductController@updateProduct')->middleware('guest');

	Route::get('/update-db','ProductController@updateDatabase')->middleware('guest');

	Route::get('/category','ProductController@category');

	Route::get('/buy','ProductController@buy');
	Route::post('/cart','ProductController@addToCart');
	Route::get('/viewcart','ProductController@viewCart');
	Route::post('/get-quantity','ProductController@getQuantity');
	
		Route::post('/add-shipping-details','ProductController@addShippingDetails')->middleware('guest');
	Route::get('/select-shipping-details','ProductController@selectShippingDetails')->middleware('guest');
	Route::post('/invoice','ProductController@invoice')->middleware('guest');

	Route::get('/order-details','ProductController@orderDetails');
	Route::post('/show-payment','ProductController@showPayment')->middleware('guest');

	Route::get('/account','UserController@myAccount')->middleware('guest');
	Route::post('/billing-details','ProductController@addBillingDetails')->middleware('guest');
	Route::get('/purchased','ProductController@showPurchasedProduct')->middleware('guest');
	Route::get('/vendor','PrivilegesController@addVendor')->middleware('guest');
	Route::post('/add-vendor','PrivilegesController@addVendorToDB')->middleware('guest');
	Route::get('/list-of-vendors','PrivilegesController@listOfVendors')->middleware('guest');
	Route::get('/vendor-details','PrivilegesController@vendorDetails')->middleware('guest');
	Route::post('/check-vendor-admin','PrivilegesController@checkVendorAdmin')->middleware('guest');

	Route::post('/download','ProductController@downloadInvoice')->middleware('guest');
	
	Route::get('/getorders','UpdateController@getOrderCount')->middleware('guest');
	Route::get('/getproducts','UpdateController@getProductsCount')->middleware('guest');
	Route::get('/view-orders','ProductController@viewOrders')->middleware('guest');

	Route::get('/my-orders','ProductController@myOrders')->middleware('guest');
	
	Route::get('/specific-order-details','ProductController@specificOrderDetails')->middleware('guest');

	Route::post('/select-product','ProductController@selectProduct')->middleware('guest');

	Route::post('/bindData','ProductController@bindCartData');
Route::prefix('api')->group(function () {
		Route::get('/getUsers','api\UserController@getUsers');
		Route::get('/getOrders','api\OrderController@getOrders');
		Route::get('/getProduct','api\ProductComparisonController@getProducts');
		Route::get('/getRegion','api\RegionController@getRegion');
	});
/* Route::get('/upload', 'testcontroller@uploadForm');
Route::post('/upload', 'testcontroller@uploadSubmit'); */
	
	Route::get('/test','ProductController@test');

 /* Route::get('/',function(){
	 return view('welcome');
 }); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/