<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\student\StudentController;

Route::get('/', function () {
    if (Auth::check()) { // Redirect based on user type
        if (auth()->user()->type == 'student') {
            return redirect()->route('student.home');
        } elseif (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }
    }
    return view('auth.login');
})->name('login');


Auth::routes();

Route::prefix('student')->middleware(['auth', 'user-access:student'])->group(function () {
    Route::get('/home', [StudentController::class, 'index'])->name('student.home');
    Route::post('/logout', [StudentController::class, 'logout'])->name('student.logout');
});

Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/students', [AdminController::class, 'readStudents'])->name('admin.students');
});
