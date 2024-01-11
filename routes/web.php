<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', [PostController::class, 'index']);
Route::get("posts/{post:slug}", [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Meme categories",
        "categories" => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('home', [
        "title" => "Meme authors",
        "posts" => $author->posts,
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => $category->name,
        "posts" => $category->posts,
        "category" => $category->name
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
