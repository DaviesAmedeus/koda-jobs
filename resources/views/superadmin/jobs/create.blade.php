<x-panel.dash>
    <div class="container-fluid">
        <x-panel.user-modal-button title="Create Job" />

         @if (session('error'))
            <div class="alert alert-warning text-center mb-4 rounded-0">
                <strong> {{ session('error') }}</strong>
            </div>
        @endif

        <div class="row">
            <form action="/super-admin/jobs/store" method="post" class="col-xl-12">
                @csrf

                <div class="card-body bg-light border ">

                    <div class="col-xl-12">
                        <div class="card spur-card">
                            <div class="card-header">
                                <div class="spur-card-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="spur-card-title"> Job Information</div>
                            </div>
                            <div class="card-body ">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Job Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Eg: LECTURER (TELECOMMUNICATIONS ENGINEERING)" value="{{ old('title') }}" name="title">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="tags">Tags</label>
                                        <input type="text" class="form-control" id="tags"
                                            placeholder="eg: software, hardware, " value="{{ old('tags') }}" name="tags">
                                        @error('tags')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                </div>



                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Company</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="company">
                                            <option class="text-muted">---Select Company---</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('company')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="positions">Positions</label>
                                        <input type="number" class="form-control" name="positions" placeholder="Eg: 2" value="{{ old('positions') }}">
                                        @error('positions')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Type</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="type">
                                            <option value="Full Time">Full Time</option>
                                            <option value="Full Time">Part Time</option>
                                        </select>
                                        @error('type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Salary</label>
                                        <input type="number" class="form-control" placeholder="Eg: 500000"
                                            name="salary" value="{{ old('salary') }}">
                                        @error('salary')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>



                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Location</label>
                                        <input type="text" class="form-control" placeholder="Eg: Kahama"
                                            name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Deadline</label>
                                        <input type="datetime-local"class="form-control" name="deadline" value="{{ old('deadline') }}">
                                        @error('deadline')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Job Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Summary of the job position......."
                                        rows="3" name="description">{{ old('description') }}"</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 col-6 mx-auto">
                        <button type="submit" class="btn btn-secondary btn-lg btn-block mb-1">Creat Job</button>
                    </div>
                </div>



            </form>



        </div>



    </div>
</x-panel.dash>
