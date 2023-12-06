@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="container">
    <div class="content-wrapper">
        <h4 class="mt-3">Training Programs</h4>
        <p class="fs-6">Below are our programs.
            We have something for you </p>
        <h5><strong>Programs this month</strong> <a href="#" class="float-end">See all</a></h5>
        <div style="clear:both"></div>
        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
            <div class="mt-4">
                <h4>CPD Data Analytics</h4>
                <p class="fs-6">Capabuil Program</p>
                <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
            </div>
            <div>
                <p class="rounded bg-dark-subtle p-4"></p>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
            <div class="mt-4">
                <h4>CPD Project Management</h4>
                <p class="fs-6">Capabuil Program</p>
                <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
            </div>
            <div>
                <p class="rounded bg-dark-subtle p-4"></p>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
            <div class="mt-4">
                <h4>CPD Project Management</h4>
                <p class="fs-6">Capabuil Program</p>
                <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
            </div>
            <div>
                <p class="rounded bg-dark-subtle p-4"></p>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
            <div class="mt-4">
                <h4>CPD Project Management</h4>
                <p class="fs-6">Capabuil Program</p>
                <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
            </div>
            <div>
                <p class="rounded bg-dark-subtle p-4"></p>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
            <div class="mt-4">
                <h4>CPD Project Management</h4>
                <p class="fs-6">Capabuil Program</p>
                <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
            </div>
            <div>
                <p class="rounded bg-dark-subtle p-4"></p>
            </div>
        </div>
        <!-- Programs -->
        <div class="programs-wrap">
            <h5 class="bg-transparent"><strong>Programs this week</strong> <a href="#" class="float-end">See all</a></h5>
            <div id="programs" class="carousel carousel-dark slide" data-bs-ride="true" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group gap-3">
                            <div class="card">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>
        <!-- Upcoming -->
        <div class="mt-4">
            <h5 class="bg-transparent"><strong>Upcoming Programs</strong> <a href="#" class="float-end">See all</a></h5>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
        </div>
        <!-- Personalized Specializations -->
        <div>
            <h5 class="bg-transparent"><strong>Personalized Specializations</strong> <a href="#" class="float-end">See all</a></h5>
            <div id="personalized" class="carousel carousel-dark slide" data-bs-ride="true" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group gap-3">
                            <div class="card">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
        <!-- Programs for new hires -->
        <div class="mt-3">
            <h5 class="bg-transparent"><strong>Programs for
                    New Hires</strong> <a href="#" class="float-end">See all</a></h5>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
        </div>
        <!-- Human Resource -->
        <div class="mt-3">
            <h5 class="bg-transparent"><strong>Human Resource
                    Essentials</strong> <a href="#" class="float-end">See all</a></h5>
            <div id="hr" class="carousel carousel-dark slide" data-bs-ride="true" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group gap-3">
                            <div class="card">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
        <!-- Leadership -->
        <div class="mt-3">
            <h5 class="bg-transparent"><strong>Leadership Based
                    Programs</strong> <a href="#" class="float-end">See all</a></h5>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
        </div>
        <!-- Popular programs -->
        <div class="mt-3">
            <h5 class="bg-transparent"><strong>Most Popular Programs</strong> <a href="#" class="float-end">See all</a></h5>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center flex-wrap  ">
                <div class="mt-4">
                    <h4>CPD Project Management</h4>
                    <p class="fs-6">Capabuil Program</p>
                    <p><img src="{{ asset('assets/img/star.svg') }}" />4.9</p>
                </div>
                <div>
                    <p class="rounded bg-dark-subtle p-4"></p>
                </div>
            </div>
        </div>
        <!-- New programs -->
        <div class="mt-3">
            <h5 class="bg-transparent"><strong>Most Popular Programs</strong> <a href="#" class="float-end">See all</a></h5>
            <div id="hr" class="carousel carousel-dark slide" data-bs-ride="true" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group gap-3">
                            <div class="card">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                            <div class="card ">
                                <ul class="d-flex align-items-center company-name">
                                    <li></li>
                                    <li>Capabuil Limited</li>
                                </ul>
                                <div class="card-body">
                                    <h5 class="card-title">Strategic Practical Tax Compliance</h5>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>



@endsection