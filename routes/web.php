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

// Contact
Route::get('/contact', function() {
	return view('contact');
});