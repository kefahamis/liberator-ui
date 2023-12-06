@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center gap-5 mt-4">

    <div >
        <img src="{{ asset('assets/img/splash-img.jpg') }}" class="align-self-center" />
        <h2 class="text-center">Explore our
            programs</h2>
        <p class="text-center">

            If you think that you or your company are 
looking to excel a midst the digital era, there are a number of programs tailored for you.
        </p>
    </div>
    

</div>
<div>
        <ul class="d-flex flex-row justify-content-around">
            <li><a href="#">Skip</a></li>
            <li><a href="/start">Next</a></li>
        </ul>
    </div>
@endsection