<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'showCorrentHomePage']);
Route::post('/register',[UserController::class, 'register' ]);
Route::post('/login',[UserController::class, 'login' ]);
Route::post('/logout',[UserController::class, 'logout' ]);
Route::post('/Create-Post',[PostController::class, 'showCreateForm' ]);
Route::Get('/Create-Post',[PostController::class, 'storeNewPost' ]);
