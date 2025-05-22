<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validation
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // attempting to login
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match'
            ]);
        }

        // regenerate the session token
        $request->session()->regenerate();

        // Redirect
        $user = Auth::user();
        if ($user->hasRole('superAdmin')) {
           return redirect()->route('superadmin.dashboard')->with('success', 'Congrats! You are now logged In.');
        }
        if ($user->hasRole('jobSeeker')) {
            return redirect('/')->with('success', 'Congrats! You are now logged In.');
        }

        if ($user->hasRole('employer')) {
            return redirect('/')->with('success', 'Welcome, Super Admin');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have been logged out!');
    }
}
