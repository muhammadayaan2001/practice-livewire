@extends('layouts.app')

@section('title', 'Submit Form')


@section('content')
    <div class="employee-crud">
        {{-- @livewire('crud.image-uploading') --}}
        @livewire('crud.employees')
    </div>

@endsection