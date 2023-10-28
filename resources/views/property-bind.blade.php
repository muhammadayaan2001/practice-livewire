@extends('layouts.app')

@section('title', 'Welcome Page')


@section('content')
    <div class="container-fluid property-binding">
        @livewire('property-binding')
    </div>  
@endsection
