<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/super-admin/store" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="mb-4">
                                                    <h6 class="text-muted mb-3"><b>Register as:</b></h6>
                                                    <label>
                                                        <input type="radio" name="role" value="jobSeeker" checked
                                                            onclick="toggleEmployerFields()"> Jobseeker
                                                    </label>
                                                    <label class="ml-4">
                                                        <input type="radio" name="role" value="employer"
                                                            onclick="toggleEmployerFields()">
                                                        Employer
                                                    </label>
                                                </div>

                                                <div class="py-2">
                                                    <h6 class="text-muted mb-3"><b>User Registration:</b></h6>

                                                    <x-panel.forms.input placeholder='Full Name' name="name" />

                                                    <x-panel.forms.input placeholder='Email' type="email"
                                                        name="email" />


                                                    <x-panel.forms.input placeholder='Password' type="password"
                                                        name="password" />

                                                    <x-panel.forms.input placeholder='Confirm Password' type="password"
                                                        name="password_confirmation" />
                                                </div>

                                                <div id="company" class="pb-4" style="display: none;">

                                                    <h6 class="text-muted mb-3"><b>Company Information:</b></h6>

                                                    <x-panel.forms.input placeholder='Company Name'
                                                        name="company_name" />

                                                    <x-panel.forms.input placeholder='Website url' name="website" />

                                                    <x-panel.forms.input
                                                        placeholder="Short Description of the company......"
                                                        :textarea="true" name="bio" />

                                                    <x-panel.forms.file label="Company Logo" name="logo" />

                                                </div>

 <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
