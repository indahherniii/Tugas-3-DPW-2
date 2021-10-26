<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// template ecommerce

Route::get('/ebase', function () {
    return view('ecommerce.esection.ebase');
});

Route::get('/home', function () {
    return view('ecommerce.home');
});

Route::get('/about', function () {
    return view('ecommerce.about');
});

Route::get('/contact', function () {
    return view('ecommerce.contact');
});


Route::get('/elogin', function () {
    return view('ecommerce.elogin');
});

Route::get('/registration', function () {
    return view('ecommerce.registration');
});

Route::get('/single', function () {
    return view('ecommerce.single');
});

Route::get('/man', function () {
    return view('ecommerce.man');
});

Route::get('/terms', function () {
    return view('ecommerce.terms');
});

Route::get('/woman', function () {
    return view('ecommerce.woman');
});

Route::get('/cart', function () {
    return view('ecommerce.cart');
});


// template admin
Route::get('/base', function () {
    return view('section.base');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/profile', function () {
    return view('profile');
});





