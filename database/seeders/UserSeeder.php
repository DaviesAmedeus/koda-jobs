<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
use Pest\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobseekers = User::factory(5)->create(['role' => 'jobSeeker']);
        foreach ($jobseekers as $user) {
            $user->assignRole('jobSeeker');

            // Employer::factory()->create([
            //     'user_id' => $user->id
            // ]);
        }

        // Creating Dummy company users(employers)with roles and their Companies
        $employers = User::factory(5)->create(['role' => 'employer']);
        foreach ($employers as $user) {
            $user->assignRole('employer');

            Employer::factory()->create([
                'user_id' => $user->id
            ]);

               Job::factory()->create([
                'employer_id' => $user->employer->id
            ]);
        }
    }
}
