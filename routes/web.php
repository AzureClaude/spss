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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/lomba', function () {
    return view('lomba');
});

Route::get('/seminar', function () {
    return view('seminar');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/changePassword', function () {
    return view('changePassword');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/registerLomba', function () {
    return view('registerLomba');
});

Route::get('/verifyEmail', function () {
    return view('verifyEmail');
});