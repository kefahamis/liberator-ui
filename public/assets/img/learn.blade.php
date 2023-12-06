@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Learn</h2>
    <div class="d-flex justify-content-center flex-column justify-items-center align-items-center">
        <img src="{{ asset('assets/img/uil_book-open.svg') }}" class="img-fluid" width="150" />
        <div>
            <h3 class="text-center">Enroll in a program to view your progress</h3>
            <p class="text-center">Start by enrolling in a course and learn something new</p>
            <a class="btn btn-info ">Explore Programs</a>
        </div>
    </div>
</div>

@endsection