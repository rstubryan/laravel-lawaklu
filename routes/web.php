<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Meme categories",
        "categories" => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('home', [
        "title" => "Post by Author : $author->name",
        "posts" => $author->posts()->latest()->paginate(6)->withQueryString(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('home', [
        "title" => "Post by Category : $category->name",
        "posts" => $category->posts()->latest()->paginate(6)->withQueryString(),
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

Route::get('/manage-meme', function () {
    return view('managememe', [
        "title" => "Manage memes"
    ]);
});
