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
            'role' => ['nullable', 'string', 'max:255', 'in:user,admin', 'default:user'],
        ]);

        // Hash user password
        $formfields['password'] = bcrypt($formfields['password']);

        // Create new user
        $user = User::create($formfields);
        
        // login the user, start session and redirect to dashboard
        auth()->login($user);
        return redirect()->route('user.profile');
      
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
            'role' => ['nullable', 'string', 'max:255', 'in:user,admin', 'default:user'],
        ]);

        //  check if user's role is admin, if yes, then redirect to admin dashboard or to user dashboard, also if user is already logged in, then redirect to dashboard and if user check remember me, then remember user for 30 days
        if (auth()->attempt($formfields, $request->remember)) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.profile');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid login details');
        }
    
    }

    // Show user profile
    public function profile()
    {
        if(auth()->user()->role == 'user'){
            return view('admin.pages.user-profile');
        }else{
            return redirect()->route('login');
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
