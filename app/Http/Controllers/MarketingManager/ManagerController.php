<?php

namespace App\Http\Controllers\MarketingManager;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\MarketingManager;
use App\Http\Controllers\Controller;
use App\Models\MarketingCoordinator;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    // Login view
    public function login_view()
    {
        return view('manager.auth.login');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5',
        ]);

        $credenticals = [
            "email" => $request->email,
            "password" => $request->password,
        ];


        if (Auth::guard('manager')->attempt($credenticals)) {
            return redirect()->route('manager_home');
        } else {
            return redirect()->route('manager_login')->with('error', 'Information is not correct');
        }
    }

    // Homepage view
    public function home()
    {
        return view('manager.Website.home');
    }

    // Profile view
    public function profile()
    {
        return view('manager.Website.profile');
    }

    // Logout
    public function logout()
    {
        Auth::guard('manager')->logout();
        return redirect()->route('manager_login');
    }

    // Dashboard view
    public function dashboard()
    {
        $managers = MarketingManager::count();
        $coordinators = MarketingCoordinator::count();
        $students = Student::count();
        return view('manager.Website.dashboard', compact('managers', 'coordinators', 'students'));
    }

    // List faculties
    public function list_faculties()
    {
        $faculties = Faculty::get();
        return view('manager.Website.list_faculties', compact('faculties'));
    }
}
