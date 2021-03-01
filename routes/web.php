<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;


Route::resource('movies', MoviesController::class);
