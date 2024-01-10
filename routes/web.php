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

Route::get('/account', function () {
    return view('account');
});

Route::get('/addmeme', function () {
    return view('addmeme');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/managememe', function () {
    return view('managememe');
});

Route::get('/register', function () {
    return view('register');
});