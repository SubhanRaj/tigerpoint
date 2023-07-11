<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ViewsController;

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

// Home Route
Route::get('/', [ViewsController::class,'index'])-> name('home');

// About Route
Route::get('/about', [ViewsController::class,'about'])-> name('about');

// display all collections
Route::get('/collections', [ViewsController::class,'collections'])-> name('collections');

// display all categories
Route::get('/categories', [ViewsController::class,'categories'])-> name('categories');

// Display individual category page which will display all posts in that category by getting data from database
// Route::get('/categories/{category_name}', [ViewsController::class,'categories'])-> name('categories');



// Route for gallery which will display all posts as a gallery
Route::get('/gallery', [ViewsController::class,'gallery'])-> name('gallery');



// Return Privacy-policy view
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});

// Route for single post with data from database
Route::get('/{post}', [PostsController::class, 'show'])->name('posts');

// login route
Route::get('/login', [AdminController::class, 'login']) -> name('login');
// Forgot Password route
Route::get('/forgot-password', [AdminController::class, 'forgotPassword']) -> name('forgot-password');
// Register route
Route::get('/register', [AdminController::class, 'register']) -> name('register');
// Dashboard route
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']) -> name('dashboard');

// If a route does not exist or not found, return 404 page
Route::fallback(function () {
    return view('pages.404');
});


