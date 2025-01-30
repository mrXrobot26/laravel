<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// User related routes
Route::get('/', [UserController::class, 'showCorrentHomePage']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// Blog post related routes
Route::post('/Create-Post', [PostController::class, 'showCreateForm']);
Route::get('/Create-Post', [PostController::class, 'storeNewPost']);
Route::get('/post/{post}', [PostController::class, 'viewPosts']); // Fixed route
