<?php

namespace App\Http\Controllers\Student;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // Login view
    public function login_view()
    {
        return view('student.auth.login');
    }

    // Login submit
    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);

        $credenticals = [
            "email" => $request->email,
            "password" => $request->password,
        ];


        if (Auth::guard('student')->attempt($credenticals)) {
            return redirect()->route('student_home');
        } else {
            return redirect()->route('student_login')->with('error', 'Information is not correct');
        }
    }

    // Logout
    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student_login');
    }

    // Homepage
    public function home()
    {
        return view('student.Website.home');
    }

    // Dashboard
    public function dashboard()
    {
        return view('student.Website.dashboard');
    }

    // List faculties
    public function list_faculties()
    {
        $faculties = Faculty::where('id', Auth::guard('student')->user()->faculty_id)->get();
        return view('student.Website.list_faculties', compact('faculties'));
    }

    // Current faculty view
    public function current_faculty($id)
    {
        $single_faculty = Faculty::where('id', $id)->first();
        return view('student.Website.submit_idea', compact('single_faculty'));
    }
}
