<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


Route::resource('movies', MoviesController::class);
Route::resource('actors', ActorsController::class);
Route::get('actors/page/{page?}', [ActorsController::class, 'index']);

