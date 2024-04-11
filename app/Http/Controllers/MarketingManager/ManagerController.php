<?php

namespace App\Http\Controllers\MarketingManager;

use ZipArchive;
use App\Models\Idea;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\MarketingManager;
use App\Http\Controllers\Controller;
use App\Models\MarketingCoordinator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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

    // List ideas
    public function list_ideas($id)
    {
        $single_faculty = Faculty::where('id', $id)->first();
        return view('manager.Website.list_ideas', compact('single_faculty'));
    }

    // Download file (Zip)
    public function download_file($id)
    {
        try {
            $ideas = Idea::where('faculty_id', $id)->get();
            $faculty = Faculty::where('id', $id)->first();

            $fileName = 'faculty_' . $faculty->name . '.zip';
            $current_zip = File::isFile($fileName);

            // if ($current_zip) {
            //     return response()->download(public_path($fileName));
            // } 
            // else 
            // {
                $zip = new ZipArchive();

                // $fileName = 'faculty_' . $faculty->name . '.zip';

                if ($zip->open(public_path('/storage/files/' .$fileName), ZipArchive::CREATE)) {
                    foreach ($ideas as $item) {
                        $nameInZipFile = basename($item->file);
                        $zip->addFile(public_path('/storage/files/' . $item->file), $nameInZipFile);
                    }
                }
                $zip->close();
                return response()->download(public_path('/storage/files/' .$fileName));
            // }
            // $zip = new ZipArchive();

            // $fileName = 'faculty_'. $faculty->name . '.zip';

            // if ($zip->open($fileName, ZipArchive::CREATE)) {
            //     foreach ($ideas as $item) {
            //         $nameInZipFile = basename($item->file);
            //         $zip->addFile(public_path('/storage/files/' . $item->file), $nameInZipFile);
            //     }
            // }
            // $zip->close();
            // return response()->download($fileName);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
