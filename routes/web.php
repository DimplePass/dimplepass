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

Route::group(['middleware' => 'web'], function () {

	Auth::routes();

	// Robots.txt
	Route::get('robots.txt', 'UtilityController@robots');

	///// Home
	Route::get('/', ['as' => 'home','uses' => 'UtilityController@home']);

	///// Checkout
	Route::get('/checkout/register', ['as' => 'checkout.register', 'uses' => 'CheckoutController@register']);
	Route::post('/checkout/register', ['as' => 'checkout.register_user', 'uses' => 'CheckoutController@registerUser']);

	///// Members
	Route::get('/member/terms', ['as' => 'member.terms', 'uses' => 'UserController@terms']);

	///// Vendors
	Route::get('/vendor', ['as' => 'vendor.index', 'uses' => 'VendorController@index']);
	Route::get('/vendor/promise', ['as' => 'vendor.promise', 'uses' => 'VendorController@promise']);
	Route::get('/vendor/terms', ['as' => 'vendor.terms', 'uses' => 'VendorController@terms']);
	Route::get('/vendor/application', ['as' => 'vendor.application', 'uses' => 'VendorController@application']);
	Route::post('/vendor/application', ['as' => 'vendor.application.process', 'uses' => 'VendorController@applicationProcess']);
	Route::get('/vendor/email/confirmation', ['as' => 'vendor.email.signupconfirmation', 'uses' => 'VendorController@emailSignupConfirmation']);

	///// 100% for Kids
	Route::get('/foundation', ['as' => 'foundation', 'uses' => 'UtilityController@foundation']);

	///// Supporting
	Route::get('/about', ['as' => 'utility.about', 'uses' => 'UtilityController@about']);
	Route::get('/contact', ['as' => 'utility.contact', 'uses' => 'UtilityController@contact']);
	Route::get('/faqs', ['as' => 'utility.faqs', 'uses' => 'UtilityController@faqs']);
	Route::get('/guarantee', ['as' => 'utility.guarantee', 'uses' => 'UtilityController@guarantee']);
	Route::get('/how', ['as' => 'utility.how', 'uses' => 'UtilityController@how']);
	Route::get('/thebest', ['as' => 'utility.thebest', 'uses' => 'UtilityController@thebest']);

	/*
	|------------------------------------
	| Login Required Routes 
	|------------------------------------
	 */

	Route::group(['middleware' => 'auth'], function () {

		Route::get('/checkout/payment', ['as' => 'checkout.payment', 'uses' => 'CheckoutController@checkoutPayment']);
		Route::post('/checkout/payment', ['as' => 'checkout.payment.store', 'uses' => 'CheckoutController@checkoutPaymentStore']);
		Route::get('/member/{member}/passes/{pass}',['as' => 'member.passes','uses' => 'UserPassesController@show']);
		Route::get('/member/{member}/passes/{pass}/print',['as' => 'member.passes.print','uses' => 'UserPassesController@print']);		
		Route::resource('member', 'UserController')->middleware('member');
		Route::get('/purchases/{confirmationNumber}',['as' => 'purchases.show','uses' => 'PurchaseController@show']);

	});

	//Resource Controllers - Place custom methods on these controllers above the resources
	Route::resource('passes','PassController',['only' => ['index', 'show']]);
	// Route::resource('checkout', 'CheckoutController',['only' => ['index', 'create', 'store','show']]);

});

	


