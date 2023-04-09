<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Log;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller {

    // Function to retrieve and display all bookings 
    function viewBookings(){
        $data = Booking::paginate(5);

        if (Auth::user() -> can('isAdmin')) {
            return view('/adminBooking', ['bookings' => $data]);
        } else {
            return view('/bookings', ['bookings' => $data]);
        }
    }

    // Function to view specific booking details
    function viewBookingDetails($id){
        try {
            $bookingDetails = Booking::where('id', $id) -> first();
            return response() -> json($bookingDetails);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response() -> json(['error' => 'Something went wrong.'], 500);
        }
    }

    // Function to view update booking form
    function viewUpdateBooking($id){
        $bookingDetails = Booking::where('id', $id) -> first();

        if (Auth::user() -> can('isAdmin')) {
            return view('/adminBookingUpdate', ['bookingDetails' => $bookingDetails]);
        } else {
            return view('/bookingsUpdate', ['bookingDetails' => $bookingDetails]);
        }
    }
    
    // Function to add new bookings to the database
    function addBooking(Request $request) {
        $this -> validate($request, [
            'fName' => 'required',
            'lName' => 'required',
            'roomType' => 'required',
            'roomNumber' => 'required',
            'email' => 'required',
            'idCard' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipCode' => 'required',
            'bookingAmount' => 'required',
            'checkInDate' => 'required',
            'checkOutDate' => 'required',
        ]);

        $data = $request -> all();
        // Adding default data
        $data['bookingStatus'] = 'booked';
        $data['paidAmount'] = 0;

        Booking::create($data);
        return redirect('/bookings#bookings-table');
    }

    // Function to update booking details in the database
    function updateBooking(Request $request){
        $data = Booking::find($request -> id);

        $data -> roomType = $request -> roomType;
        $data -> roomNumber = $request -> roomNumber;
        $data -> checkInDate = $request -> checkInDate;
        $data -> checkOutDate = $request -> checkOutDate;
        $data -> bookingAmount = $request -> bookingAmount;
        $data -> fName = $request -> fName;
        $data -> lName = $request -> lName;
        $data -> idCard = $request -> idCard;
        $data -> email = $request -> email;
        $data -> phone = $request -> phone;
        $data -> address = $request -> address;
        $data -> city = $request -> city;
        $data -> zipCode = $request -> zipCode;
        $data -> save();

        if (Auth::user() -> can('isAdmin')) {
            return redirect('/admin/bookings#bookings-table');
        } else {
            return redirect('/bookings#bookings-table');
        }
    }

    // Function to update booking payment in the database
    function payBooking(Request $request){
        $data = Booking::findOrFail($request -> id);
        $data -> paidAmount = $data -> bookingAmount;
        $data -> bookingStatus = 'completed';
        $data -> save();
        if (Auth::user() -> can('isAdmin')) {
            return redirect('/admin/bookings#bookings-table');
        } else {
            return redirect('/bookings#bookings-table');
        }
    }
    
    // Function to delete booking from the database 
    function deleteBooking(Request $request) {
        $data = Booking::findOrFail($request -> bookingId);
        $data -> delete();

        if (Auth::user() -> can('isAdmin')) {
            return redirect('/admin/bookings#bookings-table');
        } else {
            return redirect('/bookings#bookings-table');
        }
    }
}