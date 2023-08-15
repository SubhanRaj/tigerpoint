<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

// ======================== Views Routes ========================
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
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts');

// ======================== User Registration, Login, Logout, Forgot Password, OTP Verification Routes ========================

// Show user registration form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');

// Handle user registration form data
Route::post('/register', [UserController::class, 'store'])->name('register.store')->middleware('guest');

// Show otp verification form check if session has otp and email, if not redirect to home page, also don't allow user to access this route if user is already logged in, or if user is not registered
if (session()->has('otp') && session()->has('email')) {
    Route::get('/otp-verification', [UserController::class, 'otpVerification'])->name('otp.verification')->middleware('guest');
} else {
    Route::get('/otp-verification', function () {
        return redirect()->route('home');
    })->name('otp.verification')->middleware('guest');
}

// Show user login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Handle user login form data
Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate')->middleware('guest');

// show forgot password form
Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgot.password');

// handle logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// ======================== User Routes ========================
// take authenticated user to their profile
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile')->middleware('auth');

// Update user profile update
Route::post('/user/update-profile', [UserController::class, 'updateProfile'])->name('user.update.profile')->middleware('auth');

// handle user password update
Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('user.update.password')->middleware('auth');

// ======================== Admin Routes ========================
// if get request is made to /admin, redirect to /admin/login 
Route::get('/admin', function () {
    return redirect()->route('login');
});
// take authenticated user to dashboard after login
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
// Show admin profile
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('profile')->middleware('auth');
// Handle user profile update
Route::post('/admin/update-admin-details', [AdminController::class, 'updateAdminDetails'])->name('update-admin-details')->middleware('auth');
// handle admin password update
Route::post('/admin/update-admin-password', [AdminController::class, 'updateAdminPassword'])->name('update-admin-password')->middleware('auth');

// ======================== Admin Posts Routes ========================
// Create New Post
Route::get('/admin/new-blog', [PostsController::class, 'createBlog'])->name('new-blog')->middleware('auth');

// Show all posts
Route::get('/admin/manage-posts', [PostsController::class, 'index'])->name('show-all-posts')->middleware('auth');

// Show post edit form
Route::get('/admin/edit-post/{id}', [PostsController::class, 'edit'])->name('edit-post')->middleware('auth');




// ======================== Extra Routes ========================

// Show quote on admin dashboard
Route::get('/get-quote', [AdminController::class, 'getQuote'])->name('get-quote');
// If a route does not exist or not found, return 404 page
Route::fallback(function () {
    return view('pages.404');
});








