<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

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
Route::get("post/{post:slug}", [PostController::class, 'show']);

Route::get('/account', function () {
    return view('account.index', [
        "title" => "Account",
    ]);
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard",
    ]);
})->middleware(['auth']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware(['auth']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware(['auth']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware(['auth']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Meme categories",
        "categories" => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('home', [
        "title" => "Post by $author->username",
        "posts" => $author->posts()->latest()->paginate(6)->withQueryString(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('home', [
        "title" => "Category by $category->name",
        "posts" => $category->posts()->latest()->paginate(6)->withQueryString(),
    ]);
});
