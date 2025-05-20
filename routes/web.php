<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;



Route::get('/', HomeController::class);

Route::controller(JobController::class)->group(function(){
    Route::get('/jobs', 'index');
});

Route::controller(CompaniesController::class)->group(function(){
    Route::get('/companies', 'index');
    Route::get('/profile', 'profile');

});




// Auth
Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});


// fallback
// Route::fallback(fn()=> view('fallback'));
