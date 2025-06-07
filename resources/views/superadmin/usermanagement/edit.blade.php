<x-panel.dash>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="dash-title">Edit</h1>
            </div>

            <div class="col-md-6 " style="text-align: end">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-lg mb-1"> <i
                        class="fas fa-angle-double-left"></i></a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success text-center mb-4 rounded-0">
                <strong> {{ session('success') }}</strong>
            </div>
        @endif
        <div class="row">
            <form action="/super-admin/{{ $user->id }}/update" method="post" class="col-xl-12">
                @csrf
                @method('PATCH')

                <div class="card-body bg-light border ">

                    <div class="col-xl-12">
                        <div class="card spur-card">
                            <div class="card-header">
                                <div class="spur-card-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="spur-card-title"> User Information</div>
                            </div>
                            <div class="card-body ">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Full Name" name="name" value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                          name="email"  value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" name="password" id="inputPassword4"
                                            placeholder="Password" name="password">
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    {{-- VVVV I will use this in COMPANIES VVVVV --}}
                    {{-- @if ($user->role === 'employer')
                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> User Company Information</div>
                                </div>
                                <div class="card-body ">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Company Name</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Full Name" value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Full Name</label>
                                            <input type="email" class="form-control" id="inputEmail4"
                                                placeholder="Email" value="{{ $user->email }}">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="inputPassword4" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Confirm Password</label>
                                            <input type="password" class="form-control" id="inputPassword4"
                                                name="password_confirmation" placeholder="Confirm password">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endif --}}

                    <div class="mt-3 col-6 mx-auto">
                        <button type="submit" class="btn btn-secondary btn-lg btn-block mb-1">update</button>
                    </div>
                </div>



            </form>



        </div>

    </div>
</x-panel.dash>
