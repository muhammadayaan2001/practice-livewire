<div>
    {{-- The Master doesn't talk, he acts. --}}

    <h1>Livewire Actions:</h1>

    <h3>{{ $msg }}</h3>
    <button wire:click="updateMsg">Update Message</button>

    <h3>{{ $username }}</h3>
    <button wire:mouseover="updateName('Ayaan 123')">Update Name</button>


</div>
