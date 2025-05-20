<x-auth.auth-layout title="Register">
    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <h6 class="text-muted mb-3"><b>Register as:</b></h6>
            <label>
                <input type="radio" name="role" value="jobSeeker" checked onclick="toggleEmployerFields()"> Jobseeker
            </label>
            <label class="ml-4">
                <input type="radio" name="role" value="employer" onclick="toggleEmployerFields()"> Employer
            </label>
        </div>

       <div class="py-2">
        <h6 class="text-muted mb-3"><b>User Registration:</b></h6>

        <x-auth.auth-input placeholder='Full Name' name="name" />

        <x-auth.auth-input placeholder='Email' type="email" name="email" />


        <x-auth.auth-input placeholder='Password' type="password" name="password" />

        <x-auth.auth-input placeholder='Confirm Password' type="password" name="password_confirmation" />
       </div>

        <div id="company" class="pb-4" style="display: none;">

            <h6 class="text-muted mb-3"><b>Company Information:</b></h6>

            <x-auth.auth-input placeholder='Company Name' name="company" />

            <x-auth.auth-input placeholder='Website url'  name="company" />

            <x-auth.auth-input placeholder="Short Description of the company......" :textarea="true" name="company" />

            <x-auth.auth-file label="Company Logo" name="logo" />

        </div>

        <x-auth.auth-button redirectTitle="Already have an account?" redirect="/login">Register</x-auth.auth-button>
    </form>



</x-auth.auth-layout>



