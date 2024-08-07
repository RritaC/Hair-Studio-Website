<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\ProductController;


Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
Route::get('/admin/bookings', [AppointmentController::class, 'show'])->name('admin.bookings');

Route::get('/admin/dashboard', function () {return view('admin.admin-dashboard');});


Route::get('/', function () {return view('welcome');});
Route::get('/hair', function () {return view('hair');});
Route::get('/makeup', function () {return view('makeup');});
Route::get('/products', function () {return view('products');});
Route::get('/about-us', function () {return view('about-us');});
Route::get('/hair-product-list', function () {return view('hair-product-lists');});
Route::get('/makeup-product-list', function () {return view('makeup-product-lists');});
Route::get('/brush-product-list', function () {return view('brush-product-lists');});
Route::get('/book', function () {return view('book');});

Route::post('/submit-booking', [AppointmentController::class, 'submit-booking']);
Route::post('/submit-booking', [AppointmentController::class, 'store']);
Route::post('/create-booking', [AppointmentController::class, 'create']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
