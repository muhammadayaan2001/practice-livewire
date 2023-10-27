<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <h1>LiveWire LifeCycle Hooks</h1>

    <div>
        <h3>{{ $name }}</h3>
        <h3>Counter: {{ $counter }}</h3>
        <button wire:click="updateName('Hello Ayaan')">Update Name</button>
    </div>
    <br>
    <input type="text" wire:model.live="name" >

</div>
