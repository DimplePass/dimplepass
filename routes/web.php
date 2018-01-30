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

///// Homepage
// Also has under maintenance and coming soon pages.
Route::get('/', function () {
		return view('index');
		// return view('maintenance');
    // return view('comingsoon');
});

///// National Parks
// All Parks
Route::get('/parks', function () {
    return view('parks.index');
});
// Specific Park
Route::get('/parks/yellowstone', function () {
    return view('parks.park');
});

///// Purchase
// Checkout
Route::get('/checkout', function () {
    return view('checkout.index');
});
// Confirmation
Route::get('/checkout/thanks', function () {
    return view('checkout.thanks');
});
// Email Confirmation
Route::get('/checkout/email/confirmation', function () {
    return view('checkout.email.confirmation');
});

///// Supporting Pages
// How it Works
Route::get('/how', function () {
    return view('how');
});
// About
Route::get('/about', function () {
    return view('about');
});
// FAQs
Route::get('/faqs', function () {
    return view('faqs');
});
// Contact
Route::get('/contact', function () {
    return view('contact');
});

///// Account Pages
// Become a Vendor
Route::get('/member', function () {
    return view('member.index');
});
// Member Passes
Route::get('/member/passes', function () {
    return view('member.passes');
});
// Member Coupons
Route::get('/member/coupons', function () {
    return view('member.coupons');
});
// Member Refunds
Route::get('/member/refunds', function () {
    return view('member.refunds');
});

///// Vendor Pages
// Become a Vendor
Route::get('/vendor', function () {
    return view('vendor.index');
});
// Promise
Route::get('/vendor/promise', function () {
    return view('vendor.promise');
});
// Signup
Route::get('/vendor/signup', function () {
    return view('vendor.signup');
});
// FAQs
Route::get('/vendor/confirmation', function () {
    return view('vendor.confirmation');
});
// Contact
Route::get('/vendor/email/introduction', function () {
    return view('vendor.email.introduction');
});

///// Foundation Pages
// About the Foundation
Route::get('/foundation', function () {
    return view('foundation.index');
});



