<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [FrontController::class, 'index'])->name('home');

Route::prefix('/')->group(function() {
  Route::get('services', [FrontController::class, 'services'])->name('services');
  Route::get('pages', [FrontController::class, 'pages'])->name('pages');
  Route::get('roadmap', [FrontController::class, 'roadmap'])->name('roadmap');
  Route::get('meetrohit', [FrontController::class, 'meetrohit'])->name('meetrohit');
  Route::get('about', [FrontController::class, 'aboutpage'])->name('about');
  Route::get('contact', [FrontController::class, 'contact'])->name('contact');
  Route::get('blog', [FrontController::class, 'blog'])->name('blog');
  Route::get('category', [FrontController::class, 'category'])->name('category');
  Route::get('search', [FrontController::class, 'search'])->name('search');
  Route::get('singlepost', [FrontController::class, 'singlepost'])->name('singlepost');
});

Route::prefix('/')->group(function() {
  Route::get('login', [AuthController::class, 'index'])->name('login');
  Route::get('signup', [AuthController::class, 'signup'])->name('signup');
  Route::get('forget-password', [AuthController::class, 'forgetpass'])->name('forgetpass');
  Route::get('otp-verify', [AuthController::class, 'otpverify'])->name('otpverify');
  Route::get('change-password', [AuthController::class, 'changepass'])->name('changepass');
});

Route::prefix('/admin/')->group(function() {
  Route::get('dashboard', [AppController::class, 'index'])->name('dashboard');
});