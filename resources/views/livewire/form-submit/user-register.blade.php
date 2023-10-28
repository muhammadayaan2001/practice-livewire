<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="container-fluid">
        <h1>User Registration</h1>
        <form wire:submit.prevent="submit">
    
            <div class="col-md-6 mb-4">
                <input type="text" class="form-control" wire:model.blur="name" placeholder="name">
                @error('name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mb-4">
                <input type="text" class="form-control" wire:model.blur="email" placeholder="email">
                @error('email')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 mb-4">
                <input type="password" class="form-control" wire:model.blur="password" placeholder="password">
                @error('password')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>

</div>
