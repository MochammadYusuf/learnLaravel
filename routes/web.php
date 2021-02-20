<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
	
	// Home
	Route::get('/', function() {
		return view('home');
	})->name('home');

	// About
	Route::get('/about', function() {
		return view('about');
	})->name('about');

	// Data
	Route::resource('/datasiswa', 'siswaController');

	// Update
	Route::post('/datasiswa/{id}/update/', 'siswaController@update')->name('update');
	Route::get('/datasiswa/{id}/destroy/', 'siswaController@destroy')->name('delete');

	// Contact
	Route::get('/contact', function() {
		return view('contact');
	})->name('contact');

});

// Auth Register
Route::get('/register', function() {
	return view('auth/register');
})->name('register');

// Auth Sign In
Route::get('/login', 'authController@login')->name('login');
Route::post('/login', 'authController@postLogin')->name('postLogin');
Route::get('/logout', 'authController@logout')->name('logout');