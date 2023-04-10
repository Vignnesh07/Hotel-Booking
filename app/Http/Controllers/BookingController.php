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

        // Check if requested room exists in the bookings table
        if (Booking::where([['roomNumber', $request -> roomNumber], ['bookingStatus', 'booked']]) -> exists()) {
            // Check all previous bookings with the same roomNumber to ensure room is available on requested date 
            $allBookings = Booking::where([
                ['roomNumber', $request -> roomNumber], 
                ['bookingStatus', 'booked'],
            ]) -> get();
            $requestedDate = date('Y-m-d');
            $requestedDate = date('Y-m-d', strtotime($request -> checkInDate));
    
            foreach($allBookings as $booking) { 
                $checkInDate = date('Y-m-d', strtotime($booking -> checkInDate));
                $checkOutDate = date('Y-m-d', strtotime($booking -> checkOutDate));
                if (($requestedDate >= $checkInDate) && ($requestedDate <= $checkOutDate)) {
                    return redirect() -> back() -> with('error', 'Error! Requested room has been booked.');
                } else {
                    Booking::create($data);
                    return redirect('/bookings#bookings-table') -> with('success', 'Booking has been placed successfully!');
                }
            }
        } else {
            Booking::create($data);
            return redirect('/bookings#bookings-table') -> with('success', 'Booking has been placed successfully!');
        }
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

        // Check all previous bookings to ensure room is available 
        $canUpdateDate = true;
        $allBookings = Booking::where('id', '!=', $request -> id) -> get();

        $requestedDate = date('Y-m-d');
        $requestedDate = date('Y-m-d', strtotime($request -> checkInDate));

        foreach($allBookings as $booking) { 
            $checkInDate = date('Y-m-d', strtotime($booking -> checkInDate));
            $checkOutDate = date('Y-m-d', strtotime($booking -> checkOutDate));
            if (($requestedDate >= $checkInDate) && ($requestedDate <= $checkOutDate) && ($booking -> bookingStatus == 'booked') && ($booking -> roomNumber == $request -> roomNumber)) {
                $canUpdateDate = false;
            }
        }

        if (Auth::user() -> can('isAdmin')) {
            if ($canUpdateDate) {
                $data -> save();
                return redirect('/admin/bookings#bookings-table') -> with('success', 'Booking has been updated successfully!');
            } else {
                return redirect() -> back() -> with('error', 'Error! Requested booking date has been booked.');
            }
        } else {
            if ($canUpdateDate) {
                $data -> save();
                return redirect('/bookings#bookings-table') -> with('success', 'Booking has been updated successfully!');
            } else {
                return redirect() -> back() -> with('error', 'Error! Requested booking date has been booked.');
            }
        }
    }

    // Function to update booking payment in the database
    function payBooking(Request $request){
        $data = Booking::findOrFail($request -> id);
        $data -> paidAmount = $data -> bookingAmount;
        $data -> bookingStatus = 'completed';
        $data -> save();
        if (Auth::user() -> can('isAdmin')) {
            return redirect('/admin/bookings#bookings-table') -> with('success', 'Payment details has been updated successfully!');
        } else {
            return redirect('/bookings#bookings-table') -> with('success', 'Payment details has been updated successfully!');
        }
    }
    
    // Function to delete booking from the database 
    function deleteBooking(Request $request) {
        $data = Booking::findOrFail($request -> bookingId);
        $data -> delete();

        if (Auth::user() -> can('isAdmin')) {
            return redirect('/admin/bookings#bookings-table') -> with('success', 'Booking has been deleted successfully!');
        } else {
            return redirect('/bookings#bookings-table') -> with('success', 'Booking has been deleted successfully!');
        }
    }
}