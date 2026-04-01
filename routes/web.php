<?php

use Illuminate\Support\Facades\Route;

// Landing page
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Dashboard routes

// Admin Dashboard (Owner)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('role:admin');

// Teacher Dashboard
Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');

// Student Dashboard
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->name('student.dashboard')->middleware('role:student');

