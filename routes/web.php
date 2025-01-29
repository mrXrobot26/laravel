<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Excontroller;


Route::get('/', [Excontroller::class, 'homePage']);
Route::get('/about',[Excontroller::class,'aboutPage']);
Route::post('/register',[UserController::class, 'register' ]);
