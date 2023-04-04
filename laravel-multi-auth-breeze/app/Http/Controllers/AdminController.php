<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request )
    {
        $check = $request->all();
        if(Auth::guard('admin')->attempt([ 'email' => $check['email'], 'password' => $check['password'] ]))
        {
            return redirect()->route('admin-dashboard')->with('message','Login Success');
        } 
        else {
            return back()->with('message','Login Failed!');
        }
    }

    public function dashboard() 
    {
        return view('admin.dashboard');
    }

    public function logout() 
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login-form')->with('message','Logout Success');
    }
}
