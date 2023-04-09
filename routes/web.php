<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ComplaintController;
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

/* Clerk route middlewares */
Route::group(['middleware' => 'auth'], function () {
    /* Clerk home routes */
    Route::view('/home', 'home');
    Route::post('/home/addBookings', [BookingController::class, 'addBooking']);

    /* Clerk profile route */
    Route::get('/profile', [UserController::class, 'viewUserInfo']);
    
    /* Clerk booking routes */
    Route::get('/bookings', [BookingController::class, 'viewBookings']);
    Route::get('/bookings/{id}', [BookingController::class, 'viewBookingDetails']);
    Route::get('/bookings/pay/{id}', [BookingController::class, 'payBooking']);
    Route::get('/bookings/update/{id}', [BookingController::class, 'viewUpdateBooking']);
    Route::post('/bookings/update/{id}', [BookingController::class, 'updateBooking']);
    Route::get('/bookings/delete/{bookingId}', [BookingController::class, 'deleteBooking']);

    /* Clerk complaints routes */
    Route::get('/complaints', [ComplaintController::class, 'viewComplaints']);
    Route::post('/complaints', [ComplaintController::class, 'addComplaint']);
}); 

/* Admin route middlewares */
Route::group(['middleware' => 'auth'], function () {
    Route::view('/admin/dashboard', 'dashboard')->middleware('can:isAdmin');

    /* Admin profile routes */
    Route::get('/admin/profile', [UserController::class, 'viewUserInfo'])->middleware('can:isAdmin');;

    /* Admin booking routes */
    Route::get('/admin/bookings', [BookingController::class, 'viewBookings'])->middleware('can:isAdmin');
    Route::get('/admin/bookings/pay/{id}', [BookingController::class, 'payBooking'])->middleware('can:isAdmin');
    Route::get('/admin/bookings/update/{bookingId}', [BookingController::class, 'viewUpdateBooking'])->middleware('can:isAdmin');
    Route::post('/admin/bookings/update/{bookingId}', [BookingController::class, 'updateBooking'])->middleware('can:isAdmin');
    Route::get('/admin/bookings/delete/{bookingId}', [BookingController::class, 'deleteBooking'])->middleware('can:isAdmin');

    /* Admin staff routes */
    Route::get('/admin/staff', [UserController::class, 'viewStaffs'])->middleware('can:isAdmin');
    Route::get('/admin/staff/{id}', [UserController::class, 'viewStaffInfo'])->middleware('can:isAdmin');
    Route::post('/admin/addStaff', [UserController::class, 'addStaff'])->middleware('can:isAdmin')->name('add.staff');
    Route::get('/admin/editStaff/{id}', [UserController::class, 'showUpdate'])->middleware('can:isAdmin')->name('edit.staff');
    Route::post('/admin/editStaff/{id}', [UserController::class, 'updateStaff'])->middleware('can:isAdmin')->name('update.staff');
    Route::post('/admin/deleteStaff',[UserController::class,'deleteStaff'])->middleware('can:isAdmin');
    Route::get('/admin/deleteStaff/{id}',[UserController::class,'deleteStaff'])->middleware('can:isAdmin');

    /* Admin complaints routes */
    Route::get('/admin/complaints', [ComplaintController::class, 'viewComplaints'])->middleware('can:isAdmin');
    Route::post('/admin/complaints', [ComplaintController::class, 'addComplaint'])->middleware('can:isAdmin');
    Route::post('/admin/complaints/update', [ComplaintController::class, 'updateComplaint'])->middleware('can:isAdmin');
}); 

/* Logout route */
Route::get('/logout', [LoginController::class, 'logout']);

// Incompleted routes 
Route::view("about",'about');