<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;

class StaffSection extends Controller
{
    function addStaff(Request $request){
        $request->validate([
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
        $staff ->password = bcrypt($request->password);
        $staff ->conf_password = bcrypt($request->conf_password);
        $staff ->salary = $request->salary;
        $staff ->address = $request->address;
        $staff ->zipCode = $request->zipCode;
        $staff ->phone = $request->phone;

        $staff -> save();

        return redirect("/admin/staff");
        
        
    }

    function editStaff(Request $request){
        $data = Staff::find($request ->id);
        $data ->name = $request->name;
        $data ->email = $request->email;
        $data ->authority = $request->authority;
        $data ->password = bcrypt($request->password);
        $data ->conf_password = bcrypt($request->conf_password);
        $data ->salary = $request->salary;
        $data ->address = $request->address;
        $data ->zipCode = $request->zipCode;
        $data ->phone = $request->phone;
        $data ->save();
        return redirect("/admin/staff");
    }
    
     function showUpdate($id){
        $data = Staff::find($id);
        return view("staffUpdate",['user'=>$data]);
    }
    
    function deleteStaff($id){

        $data = Staff::find($id);
        $data->delete();
        return redirect("/admin/staff");
    }
    
    function viewStaff(){
        $data = DB::table('staff')->paginate(5);
        return view('staff',['users'=>$data]);
    }

    function viewMore($id){
        try {
            $user = DB::table('staff')->where('id', $id)->first();
            return response()->json($user);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong.'], 500);
    }
}
}