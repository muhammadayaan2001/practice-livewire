@extends('layouts.app')

@section('title', 'Submit Form')


@section('content')
    <div class="user-form">
        @livewire('form-submit.user-register')
    </div>

    @livewireScripts
@endsection