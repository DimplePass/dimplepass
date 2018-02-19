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

	///// Destinations
	Route::get('/d', ['as' => 'destinations.index', 'uses' => 'DestinationController@index']);
	Route::get('/d/destination', ['as' => 'destinations.destination', 'uses' => 'DestinationController@destination']);
	// Demo Destinations
	Route::get('/d/glacier', ['as' => 'destinations.glacier', 'uses' => 'DestinationController@glacier']);
	Route::get('/d/grandcanyon', ['as' => 'destinations.grandcanyon', 'uses' => 'DestinationController@grandcanyon']);
	Route::get('/d/yosemite', ['as' => 'destinations.yosemite', 'uses' => 'DestinationController@yosemite']);
	Route::get('/d/yellowstone', ['as' => 'destinations.yellowstone', 'uses' => 'DestinationController@yellowstone']);
	Route::get('/d/zion', ['as' => 'destinations.zion', 'uses' => 'DestinationController@zion']);
	Route::get('/d/comingsoon', ['as' => 'destinations.comingsoon', 'uses' => 'DestinationController@comingsoon']);

	///// Checkout
	Route::get('/checkout', ['as' => 'checkout.index', 'uses' => 'CheckoutController@checkout']);
	Route::get('/checkout/payment', ['as' => 'checkout.payment', 'uses' => 'CheckoutController@checkoutPayment']);
	Route::post('/checkout/payment', ['as' => 'checkout.payment.store', 'uses' => 'CheckoutController@checkoutPaymentStore']);
	Route::get('/checkout/thanks', ['as' => 'checkout.thanks', 'uses' => 'CheckoutController@checkoutThanks']);
	Route::get('/checkout/email/confirmation', ['as' => 'checkout.email.confirmation', 'uses' => 'CheckoutController@checkoutEmailConfirmation']);

	///// Members
	Route::get('/member', ['as' => 'member.index', 'uses' => 'MemberController@index']);
	Route::get('/member/edit', ['as' => 'member.edit', 'uses' => 'MemberController@edit']);
	Route::get('/member/pass', ['as' => 'member.pass', 'uses' => 'MemberController@pass']);
	Route::get('/member/printpass', ['as' => 'member.printpass', 'uses' => 'MemberController@printpass']);
	Route::get('/member/terms', ['as' => 'member.terms', 'uses' => 'MemberController@terms']);

	///// Vendors
	Route::get('/vendor', ['as' => 'vendor.index', 'uses' => 'VendorController@index']);
	Route::get('/vendor/promise', ['as' => 'vendor.promise', 'uses' => 'VendorController@promise']);
	Route::get('/vendor/terms', ['as' => 'vendor.terms', 'uses' => 'VendorController@terms']);
	Route::get('/vendor/application', ['as' => 'vendor.application', 'uses' => 'VendorController@application']);
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

	    	Route::resource('member', 'MemberController');
	    });

	//Resource Controllers - Place custom methods on these controllers above the resources
	Route::resource('checkout', 'CheckoutController',['only' => ['index', 'create', 'store','show']]);
});

	


