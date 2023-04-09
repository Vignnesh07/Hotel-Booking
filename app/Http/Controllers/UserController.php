<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    
    // Function to retrieve and display all user information
    function viewUserInfo(){
        $userData = User::findOrFail(Auth::user() -> id);

        if (Auth::user() -> can('isAdmin')) {
            return view('adminProfile', ['userData' => $userData]);
        } else {
            return view('clerkProfile', ['userData' => $userData]);
        }
    }
}
