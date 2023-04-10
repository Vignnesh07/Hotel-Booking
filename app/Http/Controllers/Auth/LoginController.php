<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showAdminLoginForm() {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request) {
        $this -> validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect() -> intended('/admin/dashboard');
        } else {
            session() -> flash('error', 'Invalid Login Credentials');
            return back() -> withInput($request->only('email', 'remember'));
        }
    }

    public function showClerkLoginForm() {
        return view('auth.login', ['url' => 'clerk']);
    }

    public function clerkLogin(Request $request) {
        $this -> validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect() -> intended('/home');
        } else {
            session() -> flash('error', 'Invalid Login Credentials');
            return back() -> withInput($request->only('email', 'remember'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
