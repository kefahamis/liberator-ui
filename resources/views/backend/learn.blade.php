@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <h2>Learn</h2>
        <div class="d-flex justify-content-center flex-column justify-items-center">

            <div>
                <h3 class="">Keep learning to make progress</h3>
                <p class="fs-6">This is based on your selected topics of interest</p>

                <h4>Excel Masterclass</h4>
                <p>By Capabuil</p>
                <div class="d-flex gap-3 flex-wrap">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Introduction to Excel</h5>
                            <p class="card-text fs-6">You may join this program whenever you are ready</p>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Introduction to Excel</h5>
                            <p class="card-text fs-6">You may join this program whenever you are ready</p>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-5">Business Operations Masterclass</h4>
                <p>By Capabuil</p>
                <div class="d-flex gap-3 flex-wrap mb-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Introduction to Excel</h5>
                            <p class="card-text fs-6">You may join this program whenever you are ready</p>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Introduction to Excel</h5>
                            <p class="card-text fs-6">You may join this program whenever you are ready</p>
                            <a href="#" class="btn btn-info">Enroll</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection