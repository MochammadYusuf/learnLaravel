<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function() {
	return view('home');
});

// About
Route::get('/about', function() {
	return view('about');
});

// Data
Route::resource('/datasiswa', 'siswaController');

// Update
Route::post('/datasiswa/{id}/update/', 'siswaController@update')->name('update');
Route::get('/datasiswa/{id}/destroy/', 'siswaController@destroy')->name('delete');

// Contact
Route::get('/contact', function() {
	return view('contact');
});