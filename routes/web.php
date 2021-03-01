<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

route::view('/','index');
route::view('/movie','show');

Route::resource('movies', MoviesController::class);


