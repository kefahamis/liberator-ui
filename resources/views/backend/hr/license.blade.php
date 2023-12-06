@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <h2 class="mt-4 text-center">Choose a license</h2>
        <div class="d-flex justify-content-center flex-column align-items-center">
            <img src="{{ asset('assets/img/tabler_license.svg') }}" width="128"/>
            <p><strong>We only have 2 licenses</strong></p>

            <ul type="i">
                <li>6-month license</li>
                <li>12-month license</li>
            </ul>
            <input type="submit" value="Select your license" class="btn btn-primary" />
        </div>

    </div>
</div>


@endsection