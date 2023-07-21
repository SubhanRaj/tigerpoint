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
           return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
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

    // Handle user profile update
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . auth()->user()->id],
            'city' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],
            'phone' => ['nullable', 'string', 'regex:#^\+[1-9]\d{1,14}$#'], // 'Regex:^\+[1-9]\d{1,14}$' for phone number validation
            'position' => ['nullable', 'string'],
            'address' => ['nullable', 'string']
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->has('city')) {
            $user->city = $request->city;
        }
        if ($request->has('country')) {
            $user->country = $request->country;
        }
        if ($request->has('phone')) {
            $user->phone = $request->phone;
        }
        if ($request->has('position')) {
            $user->position = $request->position;
        }
        if ($request->has('address')) {
            $user->address = $request->address;
        }
        $user->save();

        return redirect()->back()->with('success', 'User details updated successfully');
    }

    // Handle user password update
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'newPassword' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = auth()->user();
        if (password_verify($request->current_password, $user->password)) {
            $user->password = bcrypt($request->password);
            $user->save();
            // use x-alert to show alert message
            return redirect()->back()->with('success', 'Password updated successfully');
        } else {
            return redirect()->back()->withErrors([
                'current_password' => 'The provided password does not match your current password.',
            ]);
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
