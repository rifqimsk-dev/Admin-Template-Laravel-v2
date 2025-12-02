<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])
->middleware('role:admin,user');

// AUTHENTICATION
// ====================================================================
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// ====================================================================

// DOCUMENTATION VIEWS
Route::get('/docs/login', function() {
    return view('docs.login');
});
Route::get('/docs/dashboard', function() {
    return view('docs.dashboard');
});
Route::get('/docs/form', function() {
    return view('docs.form');
});
Route::get('/docs/form-step', function() {
    return view('docs.form-step');
});
Route::get('/docs/table', function() {
    return view('docs.table');
});