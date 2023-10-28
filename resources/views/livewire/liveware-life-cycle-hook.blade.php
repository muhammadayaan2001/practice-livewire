<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <h1>LiveWire LifeCycle Hooks</h1>

    <div>
        <h3>{{ $name }}</h3>
        <h3>Counter: {{ $counter }}</h3>
        <button class="btn btn-warning" wire:click="updateName('Hello Ayaan')">Update Name</button>
    </div>
    <br>
    <div class="col-md-6 mb-4">
        <input type="text" class="form-control" wire:model.live="name">
    </div>
</div>
