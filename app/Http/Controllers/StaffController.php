<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller {
    
    // Function to retrieve and display all staffs 
    function viewStaffs(){
        $data = Staff::paginate(5);
        return view('/staff', ['staffs' => $data]);
    }

    // Function to view staff information
    function viewStaffInfo($id){
        $staff = Staff::where('id', $id) -> first();
        return response() -> json($staff);
    }

    // Function to view staffUpdate page
    function showUpdate($id){
        $data = Staff::find($id);
        return view("/staffUpdate", ['staff' => $data]);
    }

    // Function to add new staff to the database
    function addStaff(Request $request){
        $request -> validate([
           'name' =>'required',
           'email' =>'required',
           'authority' =>'required',
           'password' =>'required',
           'conf_password' =>'required',
           'salary' =>'required',
           'address' =>'required',
           'zipCode' =>'required',
           'phone' =>'required',
        ]);
        
        $staff = new Staff();
        $staff ->name = $request->name;
        $staff ->email = $request->email;
        $staff ->authority = $request->authority;
        $staff ->password = Hash::make($request->password);
        $staff ->conf_password = Hash::make($request->conf_password);
        $staff ->salary = $request->salary;
        $staff ->address = $request->address;
        $staff ->zipCode = $request->zipCode;
        $staff ->phone = $request->phone;
        $staff -> save();
        return redirect("/admin/staff");
    }

    // Function to update staff in the database
    function updateStaff(Request $request){
        $data = Staff::find($request -> id);
        $data -> name = $request -> name;
        $data -> email = $request -> email;
        $data -> authority = $request -> authority;
        $data -> salary = $request -> salary;
        $data -> address = $request -> address;
        $data -> zipCode = $request -> zipCode;
        $data -> phone = $request -> phone;
        $data -> save();
        return redirect("/admin/staff");
    }

    // Function to delete staff from the database
    function deleteStaff(Request $request){
        $data = Staff::find($request -> id);
        $data -> delete();
        return redirect("/admin/staff");
    }
}