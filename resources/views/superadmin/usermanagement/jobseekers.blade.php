<x-panel.dash>
    <div class="container-fluid">
        <x-panel.user-modal-button title="JobSeeker" />
        @if (session('success'))
            <div class="alert alert-success text-center mb-4 rounded-0">
                <strong> {{ session('success') }}</strong>
            </div>
        @endif
        <div class="row">

            <div class="col col-lg-12">
                <div class="card spur-card">

                    <div class="card-body ">
                        <div class="table-responsive align-middle">
                            <table class="table table-hover table-in-card">
                                <thead>
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Applications</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Updated at</th>
                                        <th scope="col">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($jobSeekers as $jobSeeker)
                                        <tr>
                                            <th scope="row">{{ $jobSeeker->name }}</th>
                                            <td>{{ $jobSeeker->email }}</td>
                                            <td>7 Applications</td>
                                            <td>{{ $jobSeeker->created_at }}</td>
                                            <td>{{ $jobSeeker->updated_at }}</td>
                                            <td class="">
                                                <div class="d-flex pb-3">
                                                   <a href="/super-admin/{{ $jobSeeker->id }}/edit"
                                                        class="btn btn-primary mr-3">Update</a>
                                                        <form action="/super-admin/{{ $jobSeeker->id }}/destroy" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>

                                                </div>
                                            </td>



                                        </tr>
                                    @endforeach




                                </tbody>
                            </table>

                            <!-- Modal -->
                            <x-panel.user-modal />

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-panel.dash>
