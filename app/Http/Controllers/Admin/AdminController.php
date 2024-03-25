<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\MarketingCoordinator;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\MarketingManager;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Login view
    public function login_view()
    {
        return view('admin.auth.login');
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


        if (Auth::guard('admin')->attempt($credenticals)) {
            return redirect()->route('admin_home');
        } else {
            return redirect()->route('admin_login')->with('error', 'Information is not correct');
        }
    }

    // Register submit
    public function register_submit()
    {
        $admin = Admin::where('email', 'admin@gmail.com')->first();
        if ($admin) {
            return redirect()->route('admin_login');
        } else {
            $new_admin = new Admin();
            $new_admin->name = 'Admin';
            $new_admin->email = 'admin@gmail.com';
            $p = '123456';
            $new_admin->password = Hash::make($p);
            $new_admin->save();
            return redirect()->route('admin_login');
        }
    }

    // Logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

    /* ----------------------------------------------*/

    // Profile view
    public function profile()
    {
        return view('admin.Website.profile');
    }

    /* ----------------------------------------------*/

    // Homepage view
    public function home()
    {
        return view('admin.Website.home');
    }

    /* ----------------------------------------------*/

    // Dashboard view
    public function dashboard()
    {
        return view('admin.Website.dashboard');
    }

    /* ----------------------------------------------*/

    // List Accounts view
    public function list_accounts()
    {
        $managers = MarketingManager::get();
        $coordinators = MarketingCoordinator::get();
        $students = Student::get();
        return view('admin.Website.list_accounts', compact('managers', 'coordinators', 'students'));
    }

    // Add account view
    public function add_account()
    {
        return view('admin.Website.add_account');
    }

    // Add account submit
    public function add_account_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);

        $select_role = $request->input('role');

        if ($select_role == 'Marketing Manager') 
        {
            $current_managers = MarketingManager::where('email', $request->email)->first();
            if ($current_managers) {
                return redirect()->route('admin_add_account')->with('error', 'This email already exists!');
            } else {
                $manager = new MarketingManager();
                $manager->name = $request->name;
                $manager->email = $request->email;
                $manager->password = Hash::make($request->password);

                if ($request->hasFile('photo')) {
                    $request->validate([
                        'photo' => 'image|mimes:jpg,jpeg,png,gif',
                    ]);

                    $ext = $request->file('photo')->extension();
                    $photo_name = time() . '.' . $ext;

                    $request->file('photo')->move(public_path('uploads/'), $photo_name);

                    $manager->photo = $photo_name;
                }
                $manager->save();
            }

        }

        if ($select_role == 'Marketing Coordinator') 
        {
            $current_coordinators = MarketingCoordinator::where('email', $request->email)->first();
            if ($current_coordinators) {
                return redirect()->route('admin_add_account')->with('error', 'This email already exists!');
            } else {
                $coordinator = new MarketingCoordinator();
                $coordinator->name = $request->name;
                $coordinator->email = $request->email;
                $coordinator->password = Hash::make($request->password);

                if ($request->hasFile('photo')) {
                    $request->validate([
                        'photo' => 'image|mimes:jpg,jpeg,png,gif',
                    ]);

                    $ext = $request->file('photo')->extension();
                    $photo_name = time() . '.' . $ext;

                    $request->file('photo')->move(public_path('uploads/'), $photo_name);

                    $coordinator->photo = $photo_name;
                }
                $coordinator->save();
            }

        }

        if ($select_role == 'Student') 
        {
            $current_students = Student::where('email', $request->email)->first();
            if ($current_students) {
                return redirect()->route('admin_add_account')->with('error', 'This email already exists!');
            } else {
                $student = new Student();
                $student->name = $request->name;
                $student->email = $request->email;
                $student->password = Hash::make($request->password);

                if ($request->hasFile('photo')) {
                    $request->validate([
                        'photo' => 'image|mimes:jpg,jpeg,png,gif',
                    ]);

                    $ext = $request->file('photo')->extension();
                    $photo_name = time() . '.' . $ext;

                    $request->file('photo')->move(public_path('uploads/'), $photo_name);

                    $student->photo = $photo_name;
                }
                $student->save();
            }

        }

        return redirect()->route('admin_add_account')->with('success', 'Added an account successfully!');
    }

    // edit account manager view
    public function edit_account_manager($id)
    {
        $single_manager = MarketingManager::where('id', $id)->first();
        return view('admin.Website.edit_account_manager', compact('single_manager'));
    }

    // edit account manager submit
    public function edit_account_manager_submit(Request $request, $id)
    {
        $current_single_manager = MarketingManager::where('id', $id)->first();

        $request->validate([
            'email' => 'email:rfc,dns',
        ]);

        if ($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            if (file_exists( public_path('uploads/'.$current_single_manager->photo) ) and (!empty($current_single_manager->photo)) )
            {
                unlink(public_path('uploads/' . $current_single_manager->photo));
            }
            
            $ext = $request->file('photo')->extension();
            $photo_name = time() . '.' . $ext;

            $request->file('photo')->move(public_path('uploads/'), $photo_name);
            $current_single_manager->photo = $photo_name;
        }

        $current_single_manager->name = $request->name;
        $current_single_manager->password = Hash::make($request->password);
        $current_single_manager->email = $request->email;

        $current_single_manager->update();

        return redirect()->back()->with('success', 'Updated an Marketing Manager account successfully!');

    }

    // Delete a Marketing Manager account
    public function delete_account_manager_submit($id)
    {
        $single_manager = MarketingManager::where('id', $id)->first();
        unlink(public_path('uploads/' . $single_manager->photo));
        $single_manager->delete();

        return redirect()->route('admin_list_accounts')->with('success', 'Deleted an Marketing Manager account successfully!');
    }

    /* ----------------------------------------------*/

    // Events
    public function events()
    {
        return view('admin.Website.events');
    }

    /* ----------------------------------------------*/
}
