<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/productdetails', function () {
    return view('productdetails');
});
