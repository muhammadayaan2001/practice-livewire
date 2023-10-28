@extends('layouts.app')

@section('title', 'Welcome Page')


@section('content')
    @livewire('counter')

    <div>
        <livewire:counter />
    </div>

    @livewire('profile')


@endsection

