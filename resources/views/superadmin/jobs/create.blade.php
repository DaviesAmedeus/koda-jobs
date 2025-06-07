<x-panel.dash>
    <div class="container-fluid">
        <x-panel.user-modal-button title="Create Job" />

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
                                    <div class="form-group col-md-12">
                                        <label for="name">Job Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Eg: LECTURER (TELECOMMUNICATIONS ENGINEERING)" name="title">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Company</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="company">
                                            <option>Purpose Co.</option>
                                        </select>
                                        @error('company')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Positions</label>
                                        <input type="number" class="form-control" name="password" placeholder="Eg: 2"
                                            name="positions">
                                            @error('positions')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Type</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="type">
                                            <option>Full Time</option>
                                            <option>Part Time</option>
                                        </select>
                                        @error('type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label >Salary</label>
                                        <input type="number" class="form-control" placeholder="Eg: 500000"
                                            name="salary">
                                            @error('salary')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>



                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Location</label>
                                        <input type="text" class="form-control" name="password"
                                            placeholder="Eg: Kahama" name="location">
                                            @error('location')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Deadline</label>
                                        <input type="datetime-local"class="form-control" name="deadline">
                                        @error('deadline')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Job Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Summary of the job position......." rows="3" name="description"></textarea>
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
