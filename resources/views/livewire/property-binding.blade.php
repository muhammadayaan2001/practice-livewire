<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <span>
        <strong>I am property binding component:</strong>
        {{ $message }}
    </span>
    <br>
    <input type="text" wire:model.live="message">
</div>
