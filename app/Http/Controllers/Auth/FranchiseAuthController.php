<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\franchise;

class FranchiseAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.franchise-register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|confirmed',
            'franchise_id ' => 'required',

            'postal_code' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $admin = franchise::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'franchise_id' => $request->franchise_id,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        Auth::guard('franchise')->login($admin);
        return redirect()->route('franchise.dashboard');
    }
    public function showLoginForm()
    {
        return view('auth.franchise-login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('franchise')->attempt($credentials)) {
            return redirect()->route('franchise.dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout()
    {
        Auth::guard('franchise')->logout();
        return redirect()->route('franchise.login');
    }
}
