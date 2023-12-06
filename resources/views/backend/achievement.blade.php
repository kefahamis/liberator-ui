@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <a href="#" class="mb-3"><img src="{{ asset('assets/img/ep_back.svg') }}" /></a>
        <h2 class="mt-3">Achievements</h2>
        <p class="fs-4">Your Achievements</p>
        <div class="d-flex gap-3 flex-wrap achievement-wrap">
            <div class="card bg-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Excel Fundamentals<img src="{{ asset('assets/img/medal.svg') }}" /></h5>
                    <p class="card-text fs-6">By Capabuil Limited</p>
                    <p class="status-txt"><img src="{{ asset('assets/img/verified.svg') }}" class="my-2" />Competed On 16th Jun 2023</p>
                    <a href="#" class="btn btn-primary">Share<img src="" /></a>
                </div>
            </div>
            <div class="card bg-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Excel Fundamentals<img src="{{ asset('assets/img/medal.svg') }}" /></h5>
                    <p class="card-text fs-6">By Capabuil Limited</p>
                    <p class="status-txt"><img src="{{ asset('assets/img/verified.svg') }}" class="my-2" />Competed On 16th Jun 2023</p>
                    <a href="#" class="btn btn-primary">Share<img src="" /></a>
                </div>
            </div>
            <div class="card bg-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Excel Fundamentals<img src="{{ asset('assets/img/medal.svg') }}" /></h5>
                    <p class="card-text fs-6">By Capabuil Limited</p>
                    <p class="status-txt"><img src="{{ asset('assets/img/verified.svg') }}" class="my-2" />Competed On 16th Jun 2023</p>
                    <a href="#" class="btn btn-primary">Share<img src="" /></a>
                </div>
            </div>
            <div class="card bg-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Excel Fundamentals<img src="{{ asset('assets/img/medal.svg') }}" /></h5>
                    <p class="card-text fs-6">By Capabuil Limited</p>
                    <p class="status-txt"><img src="{{ asset('assets/img/verified.svg') }}" class="my-2" />Competed On 16th Jun 2023</p>
                    <a href="#" class="btn btn-primary">Share<img src="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection