@extends('layouts.app') 
@section('content')
    {{-- Dashboard --}}
    <div class="container">
        <ul class="d-flex gap-5 p-0" style="list-style: none;">
         <li class="nav-item">
             <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
         </li>
         <li class="nav-item">
             <a href="{{ route('edit_profile') }}" class="nav-link">Edit Profile</a>
         </li>
         <li class="nav-item">
             <a href="{{ route('partner_expectation') }}" class="nav-link">Partner Expectations</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Search</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Happy Story</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Contact Us</a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">Upgrade Plan</a>
         </li>
        </ul>


        <div class="row align-items-start justify-content-between">

            @livewire('profile-card')
            @livewire('profile-expectation')

            {{-- @livewire('user-dashboard') --}}
        </div>

    </div>
{{-- @livewire('profile-card') --}}
)
   {{-- Partner Expectation --}}
   
@endsection
