@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center gap-5 mt-4">

    <div>
        <img src="{{ asset('assets/img/splash-3.jpg') }}" class="align-self-center" />

    </div>
    <div class="">
        <h2 class="text-center">
            Get Started
        </h2>
        <p class="text-center">
            Take the first step on your journey to better learning and empowerment.
            Get started today!
        </p>
    </div>
    <div>
        <a href="/sign-in" class="btn btn-theme">Let's Start</a>
    </div>
    

</div>
@endsection