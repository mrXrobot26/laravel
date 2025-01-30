<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// User related routes
Route::get('/', [UserController::class, 'showCorrentHomePage'])->name('login');
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Blog post related routes
Route::post('/Create-Post', [PostController::class, 'showCreateForm'])->middleware('auth');
Route::get('/Create-Post', [PostController::class, 'storeNewPost'])->middleware('auth');
Route::get('/post/{post}', [PostController::class, 'viewPosts'])->middleware('auth');
