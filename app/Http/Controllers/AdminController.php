<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;

class AdminController extends Controller
{
//    Return login page in admin/auth/login
    public function login(){
        return view('admin.auth.login');
    }   
    
}

