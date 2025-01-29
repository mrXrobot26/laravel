<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Excontroller;


Route::get('/', [UserController::class, 'showCorrentHomePage']);
Route::get('/about',[Excontroller::class,'aboutPage']);
Route::post('/register',[UserController::class, 'register' ]);
Route::post('/login',[UserController::class, 'login' ]);
Route::post('/logout',[UserController::class, 'logout' ]);
