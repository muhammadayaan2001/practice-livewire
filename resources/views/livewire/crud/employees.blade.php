<div>
    <style>
        .alert-success {
            display: flex;
            width: fit-content;
            position: absolute;
        }
    </style>
    <div class="container-fluid">

        <div class="jumbotron text-center mb-5">
              <h1 class="display-4">Employee CRUD</h1>
          </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card shadow p-3">

                    @if ($updateMode)
                        @include('livewire.crud._upate-emp-form')
                    @else
                        @include('livewire.crud._emp-form')
                    @endif

                </div>
            </div>

            {{-- Employee Table --}}
            <div class="col-md-6">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h3>Employee List</h3>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Title</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($allEmployees->isEmpty())
                            <td>No employee register</td>
                        @endif
                        @foreach ($allEmployees as $employee)
                            <tr>
                                <td>{{ $employee->first_name }}</td>
                                <td>{{ $employee->last_name }}</td>
                                <td>{{ $employee->job_title }}</td>
                                <td>{{ $employee->gender == 'male' ? 'M' : 'F' }}</td>
                                <td>
                                    <button wire:click="edit({{ $employee->id }})"
                                        class="btn btn-primary btn-sm">Edit</button>
                                    <button wire:click="delete({{ $employee->id }})"
                                        class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    	
                </table>
                {{ $allEmployees->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
