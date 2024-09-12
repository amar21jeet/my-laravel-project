<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function store(Request $request){
         // Validate the input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|digits:10', 
            'email' => 'required|email|unique:registrations,email', 
            'address' => 'required|string|max:150',
        ]);

        // Store the validated data in the database
        Registration::create([
            'name' => $validated['name'],
            'mobile' => $validated['mobile'],
            'email' => $validated['email'],
            'address' => $validated['address'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Registration successful!');

    }
    
}
