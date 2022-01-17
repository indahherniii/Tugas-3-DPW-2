<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\productController;

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
Route::get('/section.base', [homeController::class, 'showbase']);
Route::get('/dashboard', [homeController::class, 'showdashboard']);
Route::get('/login', [AuthController::class, 'showlogin']);
Route::get('/categories', [homeController::class, 'showcategories']);
Route::get('/user', [homeController::class, 'showuser']);
Route::get('/profile', [homeController::class, 'showprofile']);

Route::get('/product', [productController::class, 'index']);
Route::get('/product/create', [productController::class, 'create']);
Route::post('/product', [productController::class, 'store']);



