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
    return view('home', [
        "title" => "Lawaklu"
    ]);
});

Route::get('/account', function () {
    return view('account', [
        "title" => "Account"
    ]);
});

Route::get('/add-meme', function () {
    return view('addmeme', [
        "title" => "Add memes"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/manage-meme', function () {
    return view('managememe', [
        "title" => "Manage memes"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});
