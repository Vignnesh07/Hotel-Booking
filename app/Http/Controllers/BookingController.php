<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingController extends Controller
{
    function createBooking(Request $request) {
        $this -> validate($request, [
           'fname' =>'required',
           'lname' =>'required',
           'roomtype' =>'required',
           'roomnumber' =>'required',
           'email' =>'required',
           'idcard' =>'required',
           'residentialaddress' =>'required',
           'city' =>'required',
           'zipcode' =>'required',
           'amount' =>'required',
           //'paid_amount' =>'required',
           //'deposit' =>'required',
           'checkindate' =>'required',
           'checkoutdate' =>'required',
    
        ]);

        $data = $request -> all();
        // Adding default data
        //$data['roomtype'] = 'TEST';
        $data['paidmount'] = 0;
        $data['deposit'] = 0;
        $data['checkedin'] = false;
        $data['checkedout'] = false;

        Booking::create($data);
        return ("saved to database");
        //return redirect('bookings#bookings-table');
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