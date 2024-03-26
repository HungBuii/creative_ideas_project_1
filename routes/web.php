<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

/* Admin */
Route::get('/admin/login', [AdminController::class, 'login_view'])->name('admin_login'); // login
Route::post('/admin/login-submit', [AdminController::class, 'login_submit'])->name('admin_login_submit'); // login submit

Route::get('/admin/register-submit', [AdminController::class, 'register_submit'])->name('admin_register_submit'); // Register 

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin_logout'); // Logout 

Route::get('/admin/home', [AdminController::class, 'home'])->name('admin_home')->middleware('admin:admin'); // Homepage view

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard')->middleware('admin:admin'); // Dashboard view

Route::get('/admin/list-accounts', [AdminController::class, 'list_accounts'])->name('admin_list_accounts')->middleware('admin:admin'); // List Account view

Route::get('/admin/add-account', [AdminController::class, 'add_account'])->name('admin_add_account')->middleware('admin:admin'); // Add an account view
Route::post('/admin/add-account-submit', [AdminController::class, 'add_account_submit'])->name('admin_add_account_submit')->middleware('admin:admin'); // Add an account submit

// Route::get('/admin/edit-account', [AdminController::class, 'edit_account'])->name('admin_edit_account'); // Edit an account view

Route::get('/admin/edit-account/manager/{id}', [AdminController::class, 'edit_account_manager'])->name('admin_edit_account_manager')->middleware('admin:admin'); // Edit a manager account view
Route::post('/admin/edit-account/manager/{id}/update', [AdminController::class, 'edit_account_manager_submit'])->name('admin_edit_account_manager_submit')->middleware('admin:admin'); // Edit a manager account submit
Route::get('/admin/delete-account/manager/{id}', [AdminController::class, 'delete_account_manager_submit'])->name('admin_delete_account_manager_submit')->middleware('admin:admin'); // Delete a manager account
Route::get('/admin/edit-account/coordinator/{id}', [AdminController::class, 'edit_account_coordinator'])->name('admin_edit_account_coordinator')->middleware('admin:admin'); // Edit a coordinator account view
Route::post('/admin/edit-account/coordinator/{id}/update', [AdminController::class, 'edit_account_coordinator_submit'])->name('admin_edit_account_coordinator_submit')->middleware('admin:admin'); // Edit a coordinator account submit
Route::get('/admin/delete-account/coordinator/{id}', [AdminController::class, 'delete_account_coordinator_submit'])->name('admin_delete_account_coordinator_submit')->middleware('admin:admin'); // Delete a coordinator account
Route::get('/admin/edit-account/student/{id}', [AdminController::class, 'edit_account_student'])->name('admin_edit_account_student')->middleware('admin:admin'); // Edit a student account view
Route::post('/admin/edit-account/student/{id}/update', [AdminController::class, 'edit_account_student_submit'])->name('admin_edit_account_student_submit')->middleware('admin:admin'); // Edit a student account submit
Route::get('/admin/delete-account/student/{id}', [AdminController::class, 'delete_account_student_submit'])->name('admin_delete_account_student_submit')->middleware('admin:admin'); // Delete a student account


Route::get('/admin/events', [AdminController::class, 'events'])->name('admin_events')->middleware('admin:admin'); // Events view

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin_profile')->middleware('admin:admin'); // Profile view





/* Marketing Manager */
