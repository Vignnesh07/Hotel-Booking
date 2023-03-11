<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::view("bookings",'bookings');
Route::view('home', 'home');
Route::view('clerk', 'clerk');
Route::view('login', 'login');

Route::get('/', function () {
    return redirect('login');
});

Route::group(['middleware' => 'auth:clerk'], function () {
    Route::view('clerk', 'clerk');
}); 

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('home', 'home');
}); 