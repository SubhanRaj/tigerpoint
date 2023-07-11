<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;

class AdminController extends Controller
{
    //Return login page in admin/auth/login
    public function login(){
        return view('admin.auth.login');
    }
    // Return forgot password page in admin/auth/forgot-password
    public function forgotPassword(){
        return view('admin.auth.forgot-password');
    }

    // Return register page in admin/auth/register
    public function register(){
        return view('admin.auth.register');
    }

    // Return dashboard page in admin/pages/dashboard
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    
}

