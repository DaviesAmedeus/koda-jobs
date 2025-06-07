<?php

use App\Http\Controllers\Admin\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OverViewController;
use App\Http\Controllers\Admin\UserManagementController;


Route::middleware('auth')->prefix('super-admin')->group(function () {

    // Overview
    Route::controller(OverViewController::class)->group(function () {
        Route::get('/super-admin/dashboard', 'index')->name('superadmin.dashboard');
    });


    // User management
    Route::controller(UserManagementController::class)
        ->group(function () {
            Route::get('/jobseekers', 'jobseekers');
            Route::get('/employers', 'employers');
            Route::post('/store', 'store');
            Route::get('/{user}/edit', 'edit');
            Route::patch('/{user}/update', 'update');
            Route::delete('/{user}/destroy', 'destroy');
        });

        // Jobs
    Route::controller(JobController::class)
        ->group(function () {
            Route::get('/jobs', 'index');
            Route::get('/jobs/create', 'create');
            Route::post('/jobs/store', 'store');
            Route::get('/jobs/{job}/edit', 'edit');
            Route::patch('/jobs/{job}/update', 'update');
            Route::delete('/jobs/{job}/destroy', 'destroy');

        });
});


