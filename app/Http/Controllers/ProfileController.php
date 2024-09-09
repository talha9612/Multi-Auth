<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Ensure this points to the correct User model

class ProfileController extends Controller
{
     public function update(Request $request)
        {
        $user = User::find(Auth::id());; // Retrieve the authenticated user
       // dd($user); // This will dump the user object and halt execution
        
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update the user's details
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Save the changes to the database
        $user->save();

        // Return the profile view with a success message
        return redirect()->route('profile')->with('status', 'Profile updated successfully.');
        }
}
