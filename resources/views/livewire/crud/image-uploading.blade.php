<div>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Emp ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @if ($images->isEmpty())
                <td>There are no image found</td>
            @endif
            @foreach ($images as $data)
                <tr>
                    <td>{{ $data->emp_id }}</td>
                    <td>{{ $data->emp_id }}</td>
                    <td><img src="{{ Storage::url($data->image)}}" alt="Uploaded Image Preview" style="max-width: 100px;"></td>
                    <td>
                        <button wire:click="edit({{ $data->id }})"
                            class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $data->id }})"
                            class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
            
    </table>
    {{ $images->appends(['allEmployees' => $allEmployees->currentPage()])->links('pagination::bootstrap-5') }}




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Uplaod Employee Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="uploadImage" enctype="multipart/form-data">
                        <div class="col-md mb-3">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" wire:model="image" id="formFile">
                            @error('image')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md mb-3">
                            <div class="form-floating">
                                <select class="form-select" wire:model="emp_id" id="floatingSelectGrid"
                                    aria-label="Floating label select example">
                                    <option>Select Employee</option>
                                    @foreach ($emp_names as $id => $name)
                                        <option value="{{ $name->id }}">{{ $name->full_name }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelectGrid">Employee names</label>
                                @error('emp_id')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


    {{-- <a class="btn btn-primary" wire:click="create" role="button">Upload Image</a> --}}
    {{-- @if ($isOpen)
    <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block;">
        <!-- Modal content here -->
        <div class="modal-dialog">
            <!-- Modal content here -->
        </div>
    </div>
    @endif --}}
