<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingController extends Controller
{
    function createBooking(Request $request){
        $request->validate([
           'cus_name' =>'required',
           'cus_email' =>'required',
           'cus_id' =>'required',
           'cus_phone_number' =>'required',
           'cus_address' =>'required',
           'cus_city' =>'required',
           'cus_zipCode' =>'required',
           'total_price' =>'required',
           'paid_amount' =>'required',
           'deposit' =>'required',
           'check_in_date' =>'required',
           'check_out_date' =>'required',
           'checked_in' =>'required',
           'checked_out' =>'required',
           'room_id' =>'required',
        ]);
        
        $booking = new Booking();
        $booking ->cus_name = $request->cus_name;
        $booking ->cus_email = $request->cus_email;
        $booking ->cus_id = $request->cus_id;
        $booking ->cus_phone_number = $request->cus_phone_number;
        $booking ->cus_address = $request->cus_address;
        $booking ->cus_city = $request->cus_city;
        $booking ->cus_zipCode = $request->cus_zipCode;
        $booking ->total_price = $request->total_price;
        $booking ->paid_amount = $request->paid_amount;
        $booking ->deposit = $request->deposit;
        $booking ->check_in_date = $request->check_in_date;
        $booking ->check_out_date = $request->check_out_date;
        $booking ->check_in = $request->check_in;
        $booking ->checked_out = $request->checked_out;
        $booking ->room_id = $request->room_id;

        $booking -> save();

        return redirect("");
        
        
    }

    function editBooking(Request $request){
        $data = Booking::find($request->id);
        $data ->name = $request->name;
        $data ->email = $request->email;
        $data ->role = $request->role;
        $data ->address = $request->address;
        $data ->zipCode = $request->zipCode;
        $data ->phone = $request->phone;
        $data ->save();
        return redirect("");
    }
    
    function deleteBooking($id){
        $data = Booking::find($id);
        $data->delete();
        return redirect("");
    }
    
    function viewBooking(){
        
        $data = Booking::paginate(5);
        return view('user',['users'=>$data]);
        //return DB::select("SELECT * FROM bookings ");
    }
}