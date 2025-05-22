<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\RegisteredUserController;



Route::get('/', HomeController::class);



Route::controller(JobController::class)->group(function(){
    Route::get('/jobs', 'index');
});

Route::controller(CompaniesController::class)->group(function(){
    Route::get('/companies', 'index');
    Route::get('/profile', 'profile');

});


Route::middleware('auth')->group(function(){
    Route::get('/super-admin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');

});

Route::middleware('auth')->group(function(){
    Route::get('/employer/dashboard', [EmployerController::class, 'index'])->name('employer.dashboard');

});

Route::middleware('auth')->group(function(){
    Route::get('/job-seeker/dashboard', [JobSeekerController::class, 'index'])->name('jobseeker.dashboard');

});







// Auth
Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');



// fallback
Route::fallback(fn()=> view('fallback'));
