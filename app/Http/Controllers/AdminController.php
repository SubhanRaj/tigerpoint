<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //after login redirect to dashboard
    public function dashboard()
    {
        if (auth()->check()) {
            return view('admin.pages.dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    // Show user profile page
    public function userprofile(){
        return view('admin.pages.user-profile');
    }
}
