@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <a href="#"><img src="{{ asset('assets/img/chevron-left.svg') }}" /></a>
        <h2 class="mt-4 text-center">Selected License</h2>
        <div class="d-flex justify-content-center flex-column align-items-center">
            <img src="{{ asset('assets/img/spinners_wind-toy.svg') }}" width="128" />
            <h6>You have selected the</h6>
            <p><strong>12 month License</strong></p>
            <div class="d-grid gap-2 col-6 mt-4 mx-auto">
                <input type="submit" value="Cancel" class="btn btn-danger border-0" />
            </div>
        </div>

        <div class="d-grid gap-2 col-6 mt-4 mx-auto">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Select the 6 month License
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item active" href="#">Select the 6 month License</a></li>
                    <li><a class="dropdown-item" href="#">Select the 12 month License</a></li>

                </ul>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary border-0" />
        </div>
    </div>
</div>


@endsection