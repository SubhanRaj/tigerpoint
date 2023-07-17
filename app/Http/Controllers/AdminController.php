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
    public function userprofile()
    {
        return view('admin.pages.user-profile');
    }

    // Handle user profile update
    public function updateUserDetails(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . auth()->user()->id],
            'city' => ['optional', 'string'],
            'country' => ['optional', 'string'],
            'mobile' => ['optional', 'string'],
            'position' => ['optional', 'string'],
            'address' => ['optional', 'string']
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
        if ($request->has('mobile')) {
            $user->mobile = $request->mobile;
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
