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
Route::get('/parks', 'ParkController@parks');
Route::get('/parks/yellowstone', 'ParkController@park');

///// Checkout
Route::get('/checkout', 'checkoutController@checkout');
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
Route::get('/how', 'UtilityController@how');
Route::get('/about', 'UtilityController@about');
Route::get('/faqs', 'UtilityController@faqs');
Route::get('/contact', 'UtilityController@contact');