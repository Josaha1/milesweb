<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Auth
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees-list', [EmployeeController::class, 'employeeList'])->name('employees.employeeList');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// Auth Controller (dashboard, stock, order, report, profile, setting, logout)
Route::prefix('backend')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/stock', [AuthController::class, 'stock'])->name('stock');
    Route::get('/order', [AuthController::class, 'order'])->name('order');
    Route::get('/report', [AuthController::class, 'report'])->name('report');
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('/setting', [AuthController::class, 'setting'])->name('setting');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
