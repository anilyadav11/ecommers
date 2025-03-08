<?php

namespace App\Http\Controllers\Auth;
     
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.admin-register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
        $admin = Admin::create([
            'name' => $request->name, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('admin')->login($admin);
        return redirect()->route('admin.dashboard');
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    } 
}
