<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    
    // Function to retrieve and display logged in user's information
    function viewProfileInfo(){
        $userData = User::findOrFail(Auth::user() -> id);

        if (Auth::user() -> can('isAdmin')) {
            return view('adminProfile', ['userData' => $userData]);
        } else {
            return view('clerkProfile', ['userData' => $userData]);
        }
    }

    // Function to retrieve and display all staffs 
    function viewStaffs(){
        $data = User::paginate(5);
        return view('/staff', ['staffs' => $data]);
    }

    // Function to view staff information
    function viewStaffInfo($id){
        $staff = User::where('id', $id) -> first();
        return response() -> json($staff);
    }

    // Function to view staffUpdate page
    function showStaffUpdate($id){
        $data = User::find($id);
        return view("/staffUpdate", ['staff' => $data]);
    }

    // Function to retrieve and display all relevant dashboard details
    function viewDashboard() {
        $bookedRooms = Booking::select('roomNumber') -> distinct('roomNumber') -> where('bookingStatus', '=', 'booked') -> count();
        $availableRooms = 61 - $bookedRooms;
        $staffs = User::count();
        $complaints = Complaint::count();
        $unresolvedComplaints = Complaint::where('status', '=', 'Unresolved') -> count();
        $pendingPayments = Booking::where('bookingStatus', '=', 'booked') -> count();
        $totalPendingPayments = Booking::where('bookingStatus', '=', 'booked') -> sum('bookingAmount');
        $revenue = Booking::where('bookingStatus', '=', 'completed') -> sum('paidAmount');
        
        return view("/dashboard", [
            'bookedRooms' => $bookedRooms,
            'availableRooms' => $availableRooms,
            'staffs' => $staffs, 
            'complaints' => $complaints, 
            'unresolvedComplaints' => $unresolvedComplaints,
            'pendingPayments' => $pendingPayments,
            'totalPendingPayments' => $totalPendingPayments,
            'revenue' => $revenue,
        ]);
    }

    // Function to add new staff to the database
    function addStaff(Request $request){
        $request -> validate([
           'name' =>'required',
           'email' =>'required',
           'authority' =>'required',
           'password' =>'required',
           'phone' =>'required',
           'address' =>'required',
           'city' =>'required',
           'zipCode' =>'required',
        ]);
        
        $staff = new User();
        $staff -> name = $request -> name;
        $staff -> email = $request -> email;
        $staff -> password = Hash::make($request -> password);
        $staff -> role = $request -> authority;
        $staff -> address = $request -> address;
        $staff -> city = $request -> city;
        $staff -> zipCode = $request -> zipCode;
        $staff -> phone = $request -> phone;
        $staff -> save();
        return redirect("/admin/staff") -> with('success', 'Staff has been added successfully!');
    }

    // Function to update staff in the database
    function updateStaff(Request $request){
        $data = User::find($request -> id);

        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data -> role = $request -> authority;
        $data -> address = $request -> address;
        $data -> city = $request -> city;
        $data -> zipCode = $request -> zipCode;
        $data -> phone = $request -> phone;
        $data -> save();

        if ($request -> id == Auth::user() -> id && $request -> authority != Auth::user() -> role) {
            session() -> flush();
            return redirect("/logout");
        } else {
            return redirect("/admin/staff") -> with('success', 'Staff details has been updated successfully!');;
        }
    }

    // Function to delete staff from the database
    function deleteStaff(Request $request){
        $data = User::find($request -> id);
        $data -> delete();
        return redirect("/admin/staff") -> with('success', 'Staff has been deleted successfully!');;
    }
}
