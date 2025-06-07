<x-panel.layout title="Register">

    <div class="form-screen">
        <a href="/" class="spur-logo"><b>Koda-Jobs</b></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white text-center">Register</div>
            <div class="card-body">
                @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <h6 class="text-muted mb-3"><b>Register as:</b></h6>
                        <label>
                            <input type="radio" name="role" value="jobSeeker" checked
                                onclick="toggleEmployerFields()"> Jobseeker
                        </label>
                        <label class="ml-4">
                            <input type="radio" name="role" value="employer" onclick="toggleEmployerFields()">
                            Employer
                        </label>
                    </div>

                    <div class="py-2">
                        <h6 class="text-muted mb-3"><b>User Registration:</b></h6>

                        <x-panel.forms.input placeholder='Full Name' name="name" />

                        <x-panel.forms.input placeholder='Email' type="email" name="email" />


                        <x-panel.forms.input placeholder='Password' type="password" name="password" />

                        <x-panel.forms.input placeholder='Confirm Password' type="password"
                            name="password_confirmation" />
                    </div>

                    <div id="company" class="pb-4" style="display: none;">

                        <h6 class="text-muted mb-3"><b>Company Information:</b></h6>

                        <x-panel.forms.input placeholder='Company Name' name="company_name" />

                        <x-panel.forms.input placeholder='Website url' name="website" />

                        <x-panel.forms.input placeholder="Short Description of the company......" :textarea="true"
                            name="bio" />

                        <x-panel.forms.file label="Company Logo" name="logo" />

                    </div>

                    <x-panel.forms.button redirectTitle="Already have an account?"
                        redirect="/login">Register</x-panel.forms.button>
                </form>
            </div>
        </div>


    </div>




</x-panel.layout>
