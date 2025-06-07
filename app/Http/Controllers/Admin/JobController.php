<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index(){

         $jobs = Job::orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();
        return view('superadmin.jobs.index', [
            'jobs'=> $jobs
        ]);
    }

    public function create(){

         $jobs = Job::orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();
        return view('superadmin.jobs.create');
    }

    public function store(Request $request){

        $request->validate([

            'title'=> ['required', 'max:255'],
            'company'=> ['required', 'max:50'],
            'positions'=> ['required', 'numeric'],
            'type' =>['required', 'in:Part Time, Full Time'],
            'salary'=> ['required', 'numeric'],
            'deadline'=> ['required'],
            'location'=> ['required', 'max:50'],
            'description'=>['required', 'max:255']
        ]);

         dd($request->all());
    }
}
