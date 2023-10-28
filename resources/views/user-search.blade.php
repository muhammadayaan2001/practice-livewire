@extends('layouts.app')

@section('title', 'Search Box Component')


@section('content')

<div class="container-fluid">
    <h4>Render 1</h4>
    @livewire('searchbox')
    <h4>Render 2</h4>
    @livewire('searchbox')

    <div class="mt-5">
        {{-- Inline componet rendering --}}
        @livewire('profile')
    </div>
</div>

@endsection
