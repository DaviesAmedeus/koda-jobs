<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\File;

class UserManagementController extends Controller
{
    public function jobseekers()
    {
        $jobSeekers = User::role('jobSeeker')->with('employer', 'applications')->orderBy('created_at', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('superadmin.usermanagement.jobseekers', [
            'jobSeekers' => $jobSeekers
        ]);
    }



    public function employers()
    {
        $employers = User::role('employer')->with('employer')->orderBy('created_at', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('superadmin.usermanagement.employers', [
            'employers' => $employers
        ]);
    }


    //CODE TO REPLACE STORE f(X)
        public function store(Request $request)
    {
        $rules = [
            // User fields
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'role' => 'required|in:jobSeeker,employer'
        ];

        if ($request->role === 'employer') {
            $rules = array_merge($rules, [
                // Company/Employer fields
                'company_name' => ['required', 'max:50'],
                'website' => ['required'],
                'bio' => ['required'],
                'logo' => ['nullable', File::types(['png', 'jpg', 'jpeg', 'webp'])]
            ]);
        }

        $attributes = $request->validate($rules);

        try {
            DB::beginTransaction();

            // Create user
            $user = User::create([
                'name' => $attributes['name'],
                'email' => $attributes['email'],
                'role' => $attributes['role'],
                'password' => bcrypt($attributes['password']), // Don't forget to hash the password!
            ]);

            // Assign role
            $user->assignRole($attributes['role']);

            // Handle employer creation if needed
            if ($attributes['role'] === 'employer') {
                $logoPath = null;
                if (!empty($attributes['logo'])) {
                    $logoPath = $attributes['logo']->store('logos');
                }

                $user->employer()->create([
                    'company_name' => $attributes['company_name'],
                    'bio' => $attributes['bio'],
                    'website' => $attributes['website'],
                    'logo' => $logoPath
                ]);
            }

            DB::commit();

            return redirect()->back()->with('success', "User created successfully.");

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('User creation error: ' . $th->getMessage() . ' ' . $th->getTraceAsString());

            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create user. Please try again.');
        }
    }

    // public function store(Request $request)
    // {
    //     $rules = [
    //         // User fields
    //         'name' => ['required', 'max:50'],
    //         'email' => ['required', 'email', 'unique:users'],
    //         'password' => ['required', 'confirmed'],
    //         'role' => 'required|in:jobSeeker,employer'

    //     ];

    //     if ($request->role === 'employer') {
    //         $rules = array_merge($rules, [
    //             // Company/Employer fields
    //             'company_name' => ['required', 'max:50'],
    //             'website' => ['required'],
    //             'bio' => ['required'],
    //             'logo' => ['nullable',  File::types(['png', 'jpg', 'jpeg', 'webp'])]
    //         ]);
    //     }


    //     $attributes = $request->validate($rules);
    //     $user = User::create([
    //         'name' => $attributes['name'],
    //         'email' => $attributes['email'],
    //         'role' => $attributes['role'],
    //         'password' => $attributes['password'],
    //     ]);


    //     $user->assignRole($attributes['role']);

    //     if ($attributes['role'] === 'employer') {
    //         if (!empty($attributes['logo'])) {
    //             $logoPath = $attributes['logo']->store('logos');
    //         }

    //         $user->employer()->create([
    //             'company_name' => $request->company_name,
    //             'bio' => $request->bio,
    //             'website' => $request->website,
    //             'logo' => $logoPath
    //         ]);
    //     }


    //     return redirect()->back()->with('success', "You have created a user.");
    // }



    public function edit(User $user)
    {
        return view('superadmin.usermanagement.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'password' => ['nullable'],
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ?? $user->password,
        ]);


        return redirect()->back()->with('success', "You have updated a user.");;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', "You have deleted a user.");;
    }
}
