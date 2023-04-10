<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller {

    // Function to retrieve and display all complaints 
    function viewComplaints() {
        $data = Complaint::paginate(5);

        if (Auth::user() -> can('isAdmin')) {
            return view('/adminComplaint', ['complaints' => $data]);
        } else {
            return view('/complaints', ['complaints' => $data]);
        }
    }
    
    // Function to add new complaints to the database
    function addComplaint(Request $request) {
        $this -> validate($request, [
            'name' => 'required',
            'roomID' => 'required',
            'complaint' => 'required',
        ]);

        $data = $request -> all();
        // Adding default data
        $data['status'] = 'Unresolved';
        $data['budget'] = '';
        Complaint::create($data);
        if (Auth::user() -> can('isAdmin')) {
            return redirect('/admin/complaints#complaints-table') -> with('success', 'Complaint has been submitted successfully!');
        } else {
            return redirect('/complaints#complaints-table') -> with('success', 'Complaint has been submitted successfully!');
        }
    }

    // Function to update complaints in the database
    function updateComplaint(Request $request) {
        $this -> validate($request, [
            'budget' => 'required',
        ]);

        $data = Complaint::find($request -> id);
        $data -> status = 'Resolved';
        $data -> budget = $request -> budget;
        $data -> save();

        return redirect('/admin/complaints#complaints-table') -> with('success', 'Complaint has been resolved successfully!');
    }
}
