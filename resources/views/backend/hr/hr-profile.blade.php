@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <h2 class="mt-3"><strong>Registered Programs</strong></h2>
        <p>Admin details:</p>
        <p>Juliet Mmboga</p>
        <p>juliet.mmboga@capabuil.com</p>
        <h4 class="mt-3">Colleagues details:</h4>
        <p>15 colleagues registered <a href="" class="float-end">See all</a></p>
        <a href="#" class="btn btn-primary mb-3">Add Colleague</a>
        <h4>License Subscription details</h4>
        <p>At the moment you are operating on the
            6 months license.
        </p>
        <a href="" class="">Click here to upgrade to the 12 months licence</a>
        <h4>Colleagues under 6 month License</h4>
        <p>7 colleagues registered <a href="" class="float-end">See all</a></p>
        <h4>Colleagues under 12 month License</h4>
        <p>8 colleagues registered <a href="" class="float-end">See all</a></p>


    </div>
</div>


@endsection