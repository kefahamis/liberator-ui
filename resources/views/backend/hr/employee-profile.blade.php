@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <a href="#"><img src="{{ asset('assets/img/chevron-left.svg') }}" /></a>
        <h1 class="mt-4">Eugene Wamalwa</h1>
        <p class="mt-3">Position: Customer Success Manager</p>
        <p class="mt-3">Department: Sales</p>
        <p class="mt-3">Training History</p>
        <div class="bg-dashed rounded">
            <ul class="d-flex justify-content-between p-4">
                <li class="label-success">Events
                    Attended</li>
                <li>4</li>
            </ul>
            <ul class="d-flex justify-content-between p-4">
                <li class="label-danger">Events
                    Missed</li>
                <li>1</li>
            </ul>
            <ul class="d-flex justify-content-between p-4">
                <li class="label-success">Certifcates
                    Awarded</li>
                <li>3</li>
            </ul>
            <ul class="d-flex justify-content-between p-4">
                <li class="label-success">Completed
                    Programs</li>
                <li>6</li>
            </ul>
        </div>
    </div>
</div>


@endsection