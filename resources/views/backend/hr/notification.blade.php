@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <a href="#"><img src="{{ asset('assets/img/chevron-left.svg') }}" /></a>
        <h1 class="mt-4 ">Notifications</h1>
        <small>Upcoming Registered Events</small>
        <p>CPD Data Analytics</p>
        <p>CPD Leadership Masterclass</p>
        <small>Upcoming Events</small>
        <p>CPD Managing Ofiice Conflicts</p>
        <small>Required Preparations</small>
        <p>Working Laptop</p>
        <small>Updates</small>
        <p>Nothing at the moment</p>
        
</div>


@endsection