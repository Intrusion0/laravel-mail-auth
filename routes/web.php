<?php

use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Auth::routes(); 

Route::get('/', 'VideogameController@home')->name('home');

// Route Register - Login - Logout
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Route api
Route::get('/api/videogames/list', 'VideogameController@getVideogames')->name('api.videogames.list');

Route::get('/api/videogame/delete/{id}', 'VideogameController@deleteVideogame')->name('api.videogames.delete');