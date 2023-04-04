<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginForm()
    {
        $auth = Auth::guard('admin')->check();
        if ($auth) {
            return redirect()->route('admin-dashboard');
        } else {
            return view('admin.login');
        }
    }

    public function registrationForm()
    {
        $auth = Auth::guard('admin')->check();
        if ($auth) {
            return redirect()->route('admin-dashboard');
        } else {
            return view('admin.registration');
        }
    }

    public function registration(Request $request)
    {
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (!empty($admin)) {
            return redirect()->route('admin-login-form')->with('message', 'Registration Success! Please Login');
        } else {
            return back()->with('message', 'Registration Failed!');
        }
    }

    public function login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin-dashboard')->with('message', 'Login Success');
        } else {
            return back()->with('message', 'Login Failed!');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login-form')->with('message', 'Logout Success');
    }
}
