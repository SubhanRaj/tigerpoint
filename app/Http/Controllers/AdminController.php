<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;

class AdminController extends Controller
{
    //handle login with Laravel Fortify
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Fortify::authenticateUsing($request)) {
            return redirect()->intended(config('fortify.home'));
        }

        return back()->withErrors(['email' => __('auth.failed')]);
    }
    
}
