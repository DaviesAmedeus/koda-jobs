<x-panel.dash>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="dash-title">All Jobs</h1>
            </div>

            <div class="col-md-6 " style="text-align: end">
                <a href="/super-admin/jobs/create" class="btn btn-primary btn-lg mb-1"> <i class="fas fa-plus"></i></a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success text-center mb-4 rounded-0">
                <strong> {{ session('success') }}</strong>
            </div>
        @endif
        <div class="row">
            <x-panel.table-wrap>
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Company</th>
                        <th scope="col">Position</th>
                        <th scope="col">Salary (TZS)</th>
                        <th scope="col">Type</th>
                        <th scope="col">dealine</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse  ($jobs as $job)
                        <tr>
                            <th scope="row">{{ $job->title }}</th>
                            <td>{{ $job->employer->company_name }}</td>
                            <td>{{ $job->positions }}</td>
                            <td>{{ $job->salary }}/=</td>
                            <td>{{ $job->type }}</td>
                            <td>{{ $job->deadline }}</td>

                            <td class="">
                                <div class="d-flex pb-3">
                                    <a href="/super-admin/jobs/{{ $job->id }}/edit"
                                        class="btn btn-primary mr-3">Update</a>
                                    <form action="/super-admin/jobs/{{ $job->id }}/destroy" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td class="text-center" colspan="100%">No Data found</td></tr>
                    @endforelse



                </tbody>

            </x-panel.table-wrap>


            <div class="col">
                {{ $jobs->links() }}
            </div>

        </div>

    </div>
</x-panel.dash>
