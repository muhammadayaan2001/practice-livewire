<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1>User Registration</h1>

    <form wire:submit.prevent="submit">

        <input type="text" wire:model="name" placeholder="name">
        <br>
        <br>
        <input type="email" wire:model="email" placeholder="email">
        <br>
        <br>
        <input type="password" wire:model="password" placeholder="password">
        <br>
        <br>
        <button type="submit">Register</button>
    </form>
</div>
