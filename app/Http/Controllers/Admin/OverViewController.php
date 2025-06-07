<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\File;

class OverViewController extends Controller
{
    public function index()
    {
        return view('superadmin.dashboard');
    }

    
}
