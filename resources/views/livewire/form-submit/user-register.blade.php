<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1>User Registration</h1>

    <form wire:submit.prevent="submit">

        <input type="text" wire:model.blur="name" placeholder="name">
        @error('name')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <br>
        <input type="text" wire:model.blur="email" placeholder="email">
        @error('email')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <br>
        <input type="password" wire:model.blur="password" placeholder="password">
        @error('password')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <br>
        <button type="submit">Register</button>
    </form>
</div>
