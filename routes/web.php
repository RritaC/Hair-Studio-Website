<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::post('/submit-booking', [BookingController::class, 'submitBooking']);


Route::get('/', function () {return view('welcome');});
Route::get('/hair', function () {return view('hair');});
Route::get('/makeup', function () {return view('makeup');});
Route::get('/products', function () {return view('products');});
Route::get('/about-us', function () {return view('about-us');});
Route::get('/hair-product-list', function () {return view('hair-product-lists');});
Route::get('/makeup-product-list', function () {return view('makeup-product-lists');});
Route::get('/brush-product-list', function () {return view('brush-product-lists');});
Route::get('/book', function () {return view('book');});
Route::post('/submit-booking', [BookingController::class, 'submitBooking']);
