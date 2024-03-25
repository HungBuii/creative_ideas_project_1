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

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard'); // Dashboard view

Route::get('/admin/list-accounts', [AdminController::class, 'list_accounts'])->name('admin_list_accounts'); // List Account view

Route::get('/admin/add-account', [AdminController::class, 'add_account'])->name('admin_add_account'); // Add an account view
Route::post('/admin/add-account-submit', [AdminController::class, 'add_account_submit'])->name('admin_add_account_submit'); // Add an account submit

Route::get('/admin/edit-account', [AdminController::class, 'edit_account'])->name('admin_edit_account'); // Edit an account view
Route::get('/admin/edit-account/manager/{id}', [AdminController::class, 'edit_account_manager'])->name('admin_edit_account_manager'); // Edit a manager account
Route::post('/admin/edit-account/manager/{id}/update', [AdminController::class, 'edit_account_manager_submit'])->name('admin_edit_account_manager_submit'); // Edit a manager account submit

Route::get('/admin/delete-account/manager/{id}', [AdminController::class, 'delete_account_manager_submit'])->name('admin_delete_account_manager_submit'); // Delete a manager account


Route::get('/admin/events', [AdminController::class, 'events'])->name('admin_events'); // Events view

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin_profile'); // Profile view





/* Marketing Manager */
