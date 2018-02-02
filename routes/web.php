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
    // return view('index');
	// return view('maintenance');
    return view('comingsoon');
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
// Profile
Route::get('/checkout', function () {
    return view('checkout.index');
});
// Payment
Route::get('/checkout/payment', function () {
    return view('checkout.payment');
});
// Review
Route::get('/checkout/review', function () {
    return view('checkout.review');
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
// Member Overview
Route::get('/member', function () {
    return view('member.index');
});
// Member Passes
Route::get('/member/profile', function () {
    return view('member.profile');
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



