<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});



Route::get('/contact-us', function () {
    return view('contact-us');
});



Route::get('/ceo-message', function () {
    return view('ceo-message');
});



Route::get('/our-products', function () {
    return view('our-products');
});


Route::get('/our-team', function () {
    return view('our-team');
});



Route::get('/', function () {
    return view('welcome');
});
Route::post('contact-save-message', [ContactController::class, 'store'])->name('contact-save-message');

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\ContactController::class, 'index'])->name('home');
    Route::get('/reply', [App\Http\Controllers\ContactController::class, 'create'])->name('reply');
    Route::post('/reply', [App\Http\Controllers\ContactController::class, 'store'])->name('reply');
    Route::resource('/contacts', ContactController::class);
    Route::resource('/profile', ProfileController::class);
});
Route::fallback(function () {
    abort(404);
});