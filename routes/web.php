<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Auth::routes();

Route::view("about",'about');
Route::get('/', function () {
    return redirect('/login/admin');
});
Route::get('/login', function () {
    return redirect('/login/admin');
});

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/clerk', [LoginController::class, 'showClerkLoginForm']);

Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/login/clerk', [LoginController::class, 'clerkLogin']);

Route::group(['middleware' => 'auth:clerk'], function () {
    Route::view('clerk', 'clerk');
}); 

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('home', 'home');
}); 

Route::get('logout', [LoginController::class, 'logout']);

// Uncomment the below line to work on the homepage for development 
// Make sure to remove before submitting as it allows unauthenticated users 
// to enter the home page
// Route::view('home', 'home');