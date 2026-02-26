<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function seeUserData(Request $request)
    {
        $allData = $request->all();
        return $allData;
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $userEmail = User::where('email', $request->email)->first();
        if (!$userEmail || !Hash::check($request->password, $userEmail->password)) {
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }

        // Here you would typically check the user's credentials and log them in
        // For example:
        // if (Auth::attempt($request->only('email', 'password'))) {
        //     return redirect()->route('home')->with('success', 'Login successful!');
        // }
        // return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();

        return redirect()->route('dashboard')
            ->with('success', 'Login successful!')
            ->withCookie(cookie('user_email', $userEmail->id, 1)); // Cookie valid for 60 minutes
    }


    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

            $request->session()->regenerate();

            return redirect()->route('dashboard')
                ->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }

    public function logoutUser(Request $request)
    {
        // 1️⃣ Logout the user
        Auth::logout();

        // 2️⃣ Invalidate the current session
        $request->session()->invalidate();

        // 3️⃣ Regenerate CSRF token (security best practice)
        $request->session()->regenerateToken();

        // 4️⃣ Redirect to login page with optional success message
        return redirect()->route('login')
            ->with('success', 'You have been logged out successfully.');
    }
}
