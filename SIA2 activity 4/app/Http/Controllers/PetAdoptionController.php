<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetAdoptionController extends Controller
{
    public function create()
    {
        return view('pet-adoption.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{11}$/',  // ✅ Exactly 11 digits
            'experience_years' => 'required|integer|min:0|max:50',
            'pet_preference' => 'required',
            'motivation' => 'required|min:10|max:500',
            'address' => 'required|min:5'
        ], [
            'full_name.required' => 'Please enter your full name.',
            'email.email' => 'Please enter a valid email address.',
            'phone.regex' => 'Phone must be exactly 11 digits (e.g., 09876543212).',  // ✅ Updated message
            'experience_years.min' => 'Experience cannot be negative.',
            'motivation.min' => 'Tell us more about your motivation (min 10 characters).'
        ]);

        // Success - Store data or process
        return redirect()->back()->with('success',
            '🎉 Thank you ' . $request->full_name . '! Your pet adoption application has been submitted successfully! We will contact you soon.');
    }
}