<?php

namespace App\Exceptions;

use Auth;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler {
    /**
     * Register the exception handling callbacks for the application.
     */
    protected function unauthenticated($request, AuthenticationException $exception) {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest('/login/admin');
        }
        if ($request->is('clerk') || $request->is('clerk/*')) {
            return redirect()->guest('/login/clerk');
        }
        return redirect()->guest('/login');
    }
}
