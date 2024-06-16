@extends('layouts.app')
@section('content')
    {{-- Dashboard --}}
    @livewire('user-navigation')
    <div class="container">



        {{-- <div class="row align-items-start justify-content-between "> --}}

            {{-- @livewire('profile-card') --}}
            {{-- @livewire('profile-expectation') --}}

            @livewire('user-dashboard')
        {{-- </div> --}}

    </div>
{{-- @livewire('profile-card') --}}

   {{-- Partner Expectation --}}

@endsection
