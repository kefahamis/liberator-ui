@extends('inc.index')
@section('content')
<div class="container">
    <h2>Downloads</h2>
    <div class="d-flex justify-content-center flex-column justify-items-center align-items-center">
        <img src="{{ asset('assets/img/solar_download-broken.svg') }}" class="img-fluid" width="150" />
        <div>
            <h3 class="text-center">Learn anywhere, anytime</h3>
            <p>You can download your certificates here.

                Your downloads will show up here</p>
            <div><a class="btn btn-info mb-4">Find a certificate to download </a></div>
            <div><a class="btn btn-outline-primary">Download program material for
                attended events</a></div>
        </div>
    </div>
</div>

@endsection