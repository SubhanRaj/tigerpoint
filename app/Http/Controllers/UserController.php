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

    // Take authenticaated user to dashboard else redirect to login page
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    // Handle user logout
    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('/');
    }
}
