<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Excontroller;


Route::get('/', [Excontroller::class, 'homePage']);
Route::get('/about',[Excontroller::class,'aboutPage']);


