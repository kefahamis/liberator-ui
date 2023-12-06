@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <h2 class="mt-3"></h2>

        <div class="bg">
            <ul class="d-flex justify-content-between align-items-center">
                <li><img src="{{ asset('assets/img/back.svg') }}" /></li>
                <li>CPD Managing Office Conflicts
                    Professional Certificate</li>
                <li><img src="{{ asset('assets/img/share.svg') }}" /></li>
            </ul>
        </div>
        <header class="single-program">
            <h2>CPD Managing Office Conflicts
                Professional Certificate</h2>
            <p>In this program you will learn in-demand skills that
                will have you conflict-ready in less than 1 week.
                No degree or experience required.</p>
            <ul class="d-flex align-items-center">
                <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                <li><span>4.8</span></li>
            </ul>

            <h5 class="fs-6">Offered by</h5>
            <h2>Capabuil Limited</h2>
        </header>
        <div class="content-section">
            <h4>About this Professional Program</h4>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Proin sodales tincidunt urna ac
                maximus. Vestibulum non ultricies arcu, ut
                aliquam magna. Nunc posuere fringilla malesuada.
                Nulla interdum commodo tincidunt. Ut ac tellus
                sodales, imperdiet est in, venenatis leo.

                Vivamus ultrices est eleifend ipsum eleifend,
                ut euismod orci mattis. Fusce tincidunt justo et
                ullamcorper sagittis. Integer nec mattis augue.

                Praesent rutrum, turpis at condimentum euismod,
                mauris leo consequat eros, at volutpat lectus
                nunc et velit.

                Proin vehicula condimentum ligula, ac
                ullamcorper augue malesuada in. Mauris neque
                urna, eleifend in cursus cursus, egestas quis odio.
                Cras aliquet dignissim lacus ac elementum.

                Donec varius eros id tellus dapibus, a viverra ante
                ornare. Phasellus mollis cursus mauris eu aliquet.
                Sed nec enim a nisi sollicitudin egestas.</p>
            <h4>There are 4 Courses in this
                Professional Program</h4>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.

                Vivamus ultrices est eleifend ipsum eleifend,
                ut euismod orci mattis.

                Praesent rutrum, turpis at condimentum euismod,
                mauris leo consequat eros, at volutpat lectus
                nunc et velit.

                Proin vehicula condimentum ligula, ac
                ullamcorper augue malesuada in. </p>
            <div class="d-flex rating align-items-center">
                <p>4.8</p>
                <ul class="d-flex">
                    <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                    <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                    <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                    <li><img src="{{ asset('assets/img/white-star.svg') }}" /></li>
                    <li><img src="{{ asset('assets/img/Star-black.svg') }}" /></li>
                </ul>
            </div>
            <ul class="d-flex justify-content-between mt-5">
                <li>Instructors<br>
                    <span>Capabuil Limited</span>
                </li>
                <li><img src="{{ asset('assets/img/chevron-right-black.svg') }}" /></li>

            </ul>
            <div class="single-cta mb-5">
                <h3>Start Learning Today</h3>
                <ul>
                    <li class="first">Start your journey today</li>
                </ul>
                <ul>
                    <li>Shareable Specialization & Program Certificate</li>
                    <li>Learner - paced Learning Option</li>
                    <li>Practical lessons underway</li>
                </ul>
            </div>
            <h3>Get a Certificate</h3>
            <p>Shareable on Linkedin</p>
            <p class="cert-image"><img src="" /></p>
            <p>You can share your Liberator Certificates in the Certificate
                section of your LinkedIn profile, on printed resumes, CVC,
                or other documents.</p>
            <div class="faqs">
                <h2>Frequently Asked Questions</h2>
                <ul>
                    <li>
                        <h6>Can I just enroll in a single program? </h6>
                        <p>Yes! To get started, click the program card that interests you and enroll.
                            You can enroll and complete the course to earn a shareable certificate,
                            or you audit it to view the course material for free. </p>

                        <p>When you subscribe to a course that is part of your Specialization,
                            you are automatically subscribed. Visit your learned dashboard to
                            track your progress.</p>
                    </li>
                    <li>
                        <h6>How long does it take to compete the Program?</h6>
                        <p>This Program will take one week to complete.
                            This is equivalent to 40hrs.
                            Afterwards, you will be awarded a Certificate. </p>

                    </li>
                    <li>
                        <h6>What background knowledge is necessary?</h6>
                        <p>No prior knowledge is needed. </p>

                    </li>
                    <li>
                        <h6>Will I earn university / college credit for completing this
                            Program?</h6>
                        <p>No.</p>

                    </li>
                </ul>
            </div>


        </div>
        <a href="#" class="btn btn-primary border-0 rounded-0 p-4" style="width:100%;">Register your team</a>

        <div class="d-flex justify-content-between similar-program-wrap mt-4">
            <h3>Similar
                Programs</h3>
            <a href="#" class="btn">See all</a>
        </div>
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">


                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <img src="" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <img src="" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <img src="" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <div class="carousel-item">



                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <img src="" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <img src="" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <img src="" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>






    </div>
</div>


@endsection