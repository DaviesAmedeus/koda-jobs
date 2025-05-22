<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $permissions = [
            // Super Admin
            'view_users', 'create_users', 'update_users', 'delete_users',
            'view_roles', 'assign_roles',
            'view_jobs', 'delete_jobs',
            'view_applications', 'delete_applications',
            'view_employers', 'update_employers',
            'view_jobseekers', 'update_jobseekers',
            'view_dashboard', 'view_statistics',

            // Employer
            'create_jobs', 'view_own_jobs', 'update_own_jobs', 'delete_own_jobs',
            'view_applicants_to_own_jobs', 'download_resumes', 'update_own_profile',

            // Jobseeker
            'apply_jobs', 'view_own_applications',
            'delete_own_applications', 'update_own_profile', 'upload_resume',
        ];


        // Creating the permission
        foreach($permissions as $permission){
            Permission::firstOrCreate(['name'=>$permission]);
        }

        $allPermissions = Permission::all();

        // Creating Roles
        $superAdmin = Role::create(['name'=>'superAdmin']);
        $jobSeeker = Role::create(['name'=>'jobSeeker']);
        $employer = Role::create(['name'=>'employer']);


        // Giving Different Permissions to different roles
        $superAdmin->givePermissionTo($allPermissions);

        $jobSeeker->givePermissionTo([
            'view_jobs', 'apply_jobs','view_own_applications', 'delete_own_applications',
            'update_own_profile','upload_resume']);

        $employer->givePermissionTo([
            'create_jobs', 'view_own_jobs', 'update_own_jobs', 'delete_own_jobs',
            'view_applicants_to_own_jobs', 'download_resumes', 'update_own_profile',
        ]);


        // Creating the user who is the superadmin with all permissions
        $user = User::create([
            'name'=> 'Super Admin',
            'email'=> 'superadmin@kodajobs.com',
            'role'=> 'superAdmin',
            'password' =>Hash::make('superadmin@2025'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole($superAdmin);

    }
}
