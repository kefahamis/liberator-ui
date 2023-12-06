@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="#"><img src="{{ asset('assets/img/chevron-left.svg') }}" /></a>
            <a href="#"><img src="{{ asset('assets/img/archive.svg') }}" /></a>
        </div>
        <div class="input-group search-wrap employee-search ms-auto mt-4 mb-4">
            <div class="form-outline">
                <input type="search" id="form2" class="form-control p-4" placeholder="Search">
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <h3>Colleagues available for onboarding </h3>
        <div class="employee-list mb-3">
            <ul class="d-flex justify-content-between align-items-center p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>
            <ul class="d-flex justify-content-between align-items-center mb-3 p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>
            <ul class="d-flex justify-content-between align-items-center mb-3 p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>
            <ul class="d-flex justify-content-between align-items-center mb-3 p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>
            <ul class="d-flex justify-content-between align-items-center mb-3 p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>
            <ul class="d-flex justify-content-between align-items-center mb-3 p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>
            <ul class="d-flex justify-content-between align-items-center mb-3 p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>
            <ul class="d-flex justify-content-between align-items-center mb-3 p-4 rounded">
                <li>Eugene Wamalwa<br>
                    eugene.wamalwa@kengen.co.ke
                </li>
                <li><strong>Onboard</strong></li>
            </ul>

        </div>
        <div class="d-flex justify-content-between action-btn-wrap">
            <button class="btn btn-border border-secondary rounded p-4">Add Colleague</button>
            <button class="btn btn-border border-secondary rounded p-4">Remove Colleague</button>
        </div>
    </div>
</div>


@endsection