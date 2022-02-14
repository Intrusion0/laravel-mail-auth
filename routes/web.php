<?php

use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Route;

// Auth::routes(); 

Route::get('/', 'VideogameController@home')->name('home');

Route::get('/api/videogames/list', 'VideogameController@getVideogames')->name('api.videogames.list');