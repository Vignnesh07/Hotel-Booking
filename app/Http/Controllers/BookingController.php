<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Log;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller {
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

    function editBooking(Request $request){
        $data = Booking::find($request->id);
        // $data ->name = $request->name;
        // $data ->email = $request->email;
        // $data ->role = $request->role;
        // $data ->address = $request->address;
        // $data ->zipCode = $request->zipCode;
        // $data ->phone = $request->phone;
        $data ->save();
        return redirect("");
    }

    function payBooking(Request $request){
        $data = Booking::findOrFail($request -> id);
        $data -> paidAmount = $data -> bookingAmount;
        $data -> bookingStatus = 'completed';
        $data -> save();
        if (Auth::user() -> can('isAdmin')) {
            return redirect('/adminBooking#bookings-table');
        } else {
            return redirect('/bookings#bookings-table');
        }
    }
    
    function deleteBooking(Request $request) {
        $data = Booking::findOrFail($request -> bookingId);
        $data -> delete();

        if (Auth::user() -> can('isAdmin')) {
            return redirect('/adminBooking#bookings-table');
        } else {
            return redirect('/bookings#bookings-table');
        }
    }
    
    function viewBookings(){
        $data = Booking::paginate(5);

        if (Auth::user() -> can('isAdmin')) {
            return view('/adminBooking', ['bookings' => $data]);
        } else {
            return view('/bookings', ['bookings' => $data]);
        }
    }

    function viewBookingDetails($id){
        try {
            $bookingDetails = Booking::where('id', $id) -> first();
            return response() -> json($bookingDetails);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response() -> json(['error' => 'Something went wrong.'], 500);
        }
    }
}