<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //after login redirect to dashboard
    public function dashboard()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin.pages.dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    // Show admin profilw
    public function profile()
    {
        return view('admin.pages.user-profile');
    }

    // Handle user profile update
    public function updateAdminDetails(Request $request)
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
}
