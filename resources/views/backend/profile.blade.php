@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="mt-5">
                <h2>Profile</h2>
                <p>moses muturi</p>
                <p class="fs-6">moses.muturi@capabuil.com</p>
            </div>
            <div class="d-flex flex-column align-items-center mt-3">
                <img src="{{ asset('assets/img/cog.svg') }}" class="mb-4" width="30" />
                <p><span class="d-flex align-items-center justify-content-center badge bg-secondary rounded-5">m</span></p>

            </div>
        </div>
        <div class="d-flex gap-4 flex-wrap">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Achievements</h5>
                    <p class="card-text">Here is a collection of all your
                        Certificates.
                    </p>
                    <a href="#" class="btn btn-primary">See All</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">CPD Hours</h5>
                    <p class="card-text">Here is your awarded CPD hours based on the events you have attended.
                    </p>
                    <a href="#" class="btn btn-primary">See All</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Rate Attended Events</h5>
                    <p class="card-text">Please rate the corporate training events you have attended
                    </p>
                    <a href="#" class="btn btn-primary">Rate</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection