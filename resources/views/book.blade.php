@extends('layouts.app')
@section('content')
<div class="d-flex flex-column align-items-center justify-content-end gap-5 mt-4">

    <div class="">
        <img src="{{ asset('assets/img/splash-1.jpg') }}" />
        <h2 class="text-center">Book a Corporate
            Training</h2>
        <p class="text-center">

            Transforming your work by offering corporate training and team building for your business.
        </p>
    </div>
    

</div>
<div>
        <ul class="d-flex flex-row justify-content-around">
            <li><a href="#">Skip</a></li>
            <li><a href="/explore">Next</a></li>
        </ul>
    </div>
@endsection