<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller {
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
        return redirect('complaints#complaints-table');
    }

    // Function to update complaints in the database
    function updateComplaint(Request $request) {
        $data = Complaint::find($request -> id);
        $data -> status = $request -> status;
        $data -> budget = $request -> budget;
        $data -> save();
        return redirect('complaints');
    }

    // Function to retrieve and display all complaints 
    function viewComplaints() {
        $data = Complaint::paginate(5);
        return view('complaints', ['complaints' => $data]);
    }
}
