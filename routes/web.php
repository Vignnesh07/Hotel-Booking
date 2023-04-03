<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::view("clerkProfile",'clerkProfile');
Route::view("complaints",'complaints');
Route::view("bookings",'bookings');
Route::get('/bookings-table', function () {
    return redirect('/bookings#bookings-table');
});
Route::get('/reservation-form', function () {
    return redirect('/home#submitReservationForm');
});
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

Route::view("/admin/dashboard", 'dashboard');

Route::view('admin/staff', 'staff');

Route::view("/admin/bookings",'adminBooking');

Route::view("/admin/complaint",'adminComplaint');

Route::view('/admin/profile', 'adminProfile');

// Uncomment the below line to work on the homepage for development 
// Make sure to remove before submitting as it allows unauthenticated users 
// to enter the home page
// Route::view('home', 'home');