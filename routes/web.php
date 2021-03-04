<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;


Route::resource('movies', MoviesController::class);

Route::resource('actors', ActorsController::class);

Route::resource('tv', TvController::class);

Route::get('actors/page/{page?}', [ActorsController::class, 'index']);
Route::get('tv/{id}', [TvController::class, 'index']);

