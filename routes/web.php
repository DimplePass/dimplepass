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

// Robots.txt
Route::get('robots.txt', 'UtilityController@robots');

///// Home
Route::get('/', 'UtilityController@home');

///// Parks
Route::get('/d', 'DestinationController@index');
Route::get('/d/destination', 'DestinationController@destination');
// Demo d
Route::get('/d/glacier', 'DestinationController@glacier');
Route::get('/d/grandcanyon', 'DestinationController@grandcanyon');
Route::get('/d/yosemite', 'DestinationController@yosemite');
Route::get('/d/yellowstone', 'DestinationController@yellowstone');
Route::get('/d/zion', 'DestinationController@zion');
Route::get('/d/comingsoon', 'DestinationController@comingsoon');

///// Checkout
Route::get('/checkout', 'CheckoutController@checkout');
Route::get('/checkout/payment', 'CheckoutController@checkoutPayment');
Route::get('/checkout/review', 'CheckoutController@checkoutReview');
Route::get('/checkout/thanks', 'CheckoutController@checkoutThanks');
Route::get('/checkout/email/confirmation', 'CheckoutController@checkoutEmailConfirmation');

///// Members
Route::get('/member', 'MemberController@index');
Route::get('/member/edit', 'MemberController@edit');
Route::get('/member/pass', 'MemberController@pass');

///// Vendors
Route::get('/vendor', 'VendorController@index');
Route::get('/vendor/promise', 'VendorController@promise');
Route::get('/vendor/signup', 'VendorController@signup');
Route::get('/vendor/confirmation', 'VendorController@signupConfirmation');
Route::get('/vendor/email/confirmation', 'VendorController@emailSignupConfirmation');

///// 100% for Kids
Route::get('/foundation', 'UtilityController@foundation');

///// Supporting
Route::get('/about', 'UtilityController@about');
Route::get('/contact', 'UtilityController@contact');
Route::get('/faqs', 'UtilityController@faqs');
Route::get('/guarantee', 'UtilityController@guarantee');
Route::get('/how', 'UtilityController@how');
Route::get('/thebest', 'UtilityController@thebest');