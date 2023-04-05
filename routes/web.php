<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\BookingController;
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

// Completed routes 

/* Initial route */
Route::get('/', function () {
    return redirect('/login/admin');
});

/* Login Routes */
// Short-handed login route
Route::get('/login', function () {
    return redirect('/login/admin');
});

// Admin login routes
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);

// Clerk login routes
Route::get('/login/clerk', [LoginController::class, 'showClerkLoginForm']);
Route::post('/login/clerk', [LoginController::class, 'clerkLogin']);

/* Clerk complaints routes */
Route::get('/complaints', [ComplaintController::class, 'viewComplaints']);
Route::post('/complaints', [ComplaintController::class, 'addComplaint']);

/* Route Middlewares */
Route::group(['middleware' => 'auth:clerk'], function () {
    Route::view('/home', 'home');
}); 

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin/dashboard', 'dashboard');
}); 

/* Logout route */
Route::get('logout', [LoginController::class, 'logout']);

// Incompleted routes 
Route::view("clerkProfile",'clerkProfile');

// View booking list
Route::view("bookings",'bookings');
Route::get('/bookings-table', function () {
    return redirect('/bookings#bookings-table');
});

// Get reservation-form
Route::get('/reservation-form', function () {
    return redirect('/home#submitReservationForm');
});

/* Clerk createBooking routes */
//Route::get('/complaints', [ComplaintController::class, 'viewComplaints']); view by default == home
Route::post('/home', [BookingController::class, 'createBooking'])->name('home.createBooking');


Route::view("about",'about');
Route::view('/admin/staff', 'staff');
Route::view("/admin/bookings",'adminBooking');
Route::view("/admin/complaint",'adminComplaint');
Route::view('/admin/profile', 'adminProfile');

// Uncomment the below line to work on the homepage for development 
// Make sure to remove before submitting as it allows unauthenticated users 
// to enter the home page
// Route::view('home', 'home');