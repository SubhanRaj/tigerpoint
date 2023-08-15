<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

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
        // if any error or failed to update user details, then redirect back with error message
        if ($request->fails()) {
            return back()->withErrors($request)->withInput();
        }
    }

    // handle admin password update
    public function updateAdminPassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'newPassword' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = auth()->user();
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('success', 'Password updated successfully');
        } else {
            return redirect()->back()->withErrors([
                'current_password' => 'The provided password does not match your current password.',
            ]);
        }
    }

    // show quote on admin dashboard
    public function getQuote()
    {
        $category = 'inspirational'; 
        $response = Http::withHeaders([
            'X-Api-Key' => 'xOTB3ElmNlzpHsqO1Ob63A==JOpazoDZNHnxQ0MV',
        ])->get('https://api.api-ninjas.com/v1/quotes', [
            'category' => $category,
        ]);

        $quote = $response->json()[0]['quote'] ?? "No quote available"; // Get the first quote or a default message

        return response()->json(['quote' => $quote]);
    }
}
