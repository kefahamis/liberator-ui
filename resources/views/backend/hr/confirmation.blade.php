@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <a href="#"><img src="{{ asset('assets/img/chevron-left.svg') }}" /></a>
        <h1 class="mt-4 ">Confirmation!</h1>
        <p>Here’s the summary of the selected trainings</p>
        <div class="confirm-wrap rounded p-4 mb-4">
            <h2>CPD Project Management</h2>
            <h4>3rd - 8th July 2023</h4>
            <p>Sarova Whitesands, Mombasa</p>
            <p>5 Colleagues registered.</p>
            <ul>
                <li>John Otieno</li>
                <li>Eugene Wamalwa</li>
                <li>Johnson Sakaja</li>
                <li>Mike Sonko</li>
                <li>Fred Odhiambo</li>
            </ul>
        </div>
        <div class="analytics-wrap rounded p-4 mb-4">
            <h2>CPD Data Analytics</h2>
            <h4>3rd - 8th July 2023</h4>
            <p>Sarova Whitesands, Mombasa</p>
            <p>5 Colleagues registered.</p>
            <ul>
                <li>John Otieno</li>
                <li>Eugene Wamalwa</li>
                <li>Johnson Sakaja</li>
                <li>Mike Sonko</li>
                <li>Fred Odhiambo</li>
            </ul>
        </div>
        <div class="d-flex justify-content-between action-btn-wrap">
            <button class="btn btn-border border-secondary rounded p-4">Add Colleague</button>
            <button class="btn btn-border border-secondary rounded p-4">Remove Colleague</button>
        </div>
        <button class="btn btn-primary rounded-0 mt-3 p-3">Submit</button>
    </div>
</div>


@endsection