<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <h1>User Component</h1>

    @foreach ($names as $username)
        {{-- <h3>{{ $username }}</h3> --}}
        @livewire('nested-component.user-list', ['user' => $username])
        @endforeach

</div>
