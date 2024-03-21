<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Login
    public function login_view()
    {
        return view('admin.auth.login');
    }

    public function login_submit(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email:rfc,dns',
        //     'password' => 'required|min:5',
        // ]);

        $credenticals = [
            "email"=> $request->email,
            "password" => $request->password,
        ];

        
        if (Auth::guard('admin')->attempt($credenticals))
        {
            return redirect()->route('admin_home');
        }
        else 
        {
            return redirect()->route('admin_login');
        }
    }

    // Register
    public function register_submit()
    {
        $admin = Admin::where('email', 'admin@gmail.com')->first();
        if ($admin)
        {
            return redirect()->route('admin_login');
        }
        else 
        {
            $new_admin = new Admin();
            $new_admin->name = 'Admin';
            $new_admin->email = 'admin@gmail.com';
            $p = '123456';
            $new_admin->password = Hash::make($p);
            $new_admin->save();
            return redirect()->route('admin_login');
        }
    }

    // Homepage
    public function home()
    {
        return view('admin.Website.home');
    }

    // Dashboard
    public function dashboard()
    {
        return view('admin.Website.dashboard');
    }

    // List Accounts
    public function list_accounts()
    {
        return view('admin.Website.list_accounts');
    }

    // Events
    public function events()
    {
        return view('admin.Website.events');
    }
}
