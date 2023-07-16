<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // return user registration form
    public function create()
    {
        return view('admin.auth.register');
    }

    // Handle new user registration
    public function store(Request $request)
    {

        // Validate user registration form data
        $formfields = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // Hash user password
        $formfields['password'] = bcrypt($formfields['password']);

        // Create new user
        $user = User::create($formfields);
        
        // login the user, start session and redirect to dashboard
        auth()->login($user);
        return redirect()->route('dashboard');
      
    }

    // Show user login form
    public function login()
    {
        return view('admin.auth.login');
    }
    // Handle user login form data, if user check remember me, then remember user for 30 days 
    public function authenticate(Request $request)
    {
        $formfields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (auth()->attempt($formfields, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ]);
    }
    
    // Take authenticaated user to dashboard else redirect to login page
    public function dashboard()
    {
        if (auth()->check()) {
            return view('admin.pages.dashboard');
        }
    }

    // Show forgot password form
    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }
    // Handle user logout
    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('home');
    }
}