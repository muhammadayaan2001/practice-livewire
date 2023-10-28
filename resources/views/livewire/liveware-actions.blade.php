<div>
    {{-- The Master doesn't talk, he acts. --}}

    <h1>Livewire Actions:</h1>

    <h3>{{ $msg }}</h3>
    <button class="btn btn-primary" wire:click="updateMsg">Onclick Message Update</button>

    <h3>{{ $username }}</h3>
    <button class="btn btn-primary" wire:mouseover="updateName('Ayaan 123')">Mouseover Name Update</button>


</div>
