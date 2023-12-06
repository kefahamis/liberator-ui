@extends('inc.nav')
@section('content')
@include('inc.sidebar')
@section('content')
<div class="content-wrapper">

    <div class="container">
        <div class="d-flex mt-5 justify-content-between align-items-center">
            <a href="#"><img src="{{ asset('assets/img/back.svg') }}" /></a>
            <p class="fs-6">
                CPD Managing Office Conflicts
                Professional Certificate</p>
            <a href="#"><img src="{{ asset('assets/img/material-symbols_share.svg') }}" /></a>

        </div>
        <div class="bg-primary p-5 mt-5">

            <h3 class="mt-2 bg-transparent">CPD Project Management Program</h3>
            <p class="bg-transparent">In this program you will learn in-demand skills that
                will have you conflict-ready in less than 1 week.
                No degree or experience required.</p>
            <p class="bg-transparent"><img src="{{ asset('assets/img/rating.svg') }}" class="bg-transparent" width="136" /> 4.9</p>
            <p class="fs-6 bg-transparent">Offered By</p>

            <h3 class="bg-transparent">Capabuil Limited</h3>
        </div>
        <div class="mt-5">
            <h5>About this Professional Program</h5>
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
            <h5>There are 4 Courses in this
                Professional Program</h5>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.

                Vivamus ultrices est eleifend ipsum eleifend,
                ut euismod orci mattis.

                Praesent rutrum, turpis at condimentum euismod,
                mauris leo consequat eros, at volutpat lectus
                nunc et velit.

                Proin vehicula condimentum ligula, ac
                ullamcorper augue malesuada in. </p>
        </div>
        <div class="bg-info p-3">
            <p class="bg-transparent">4.8</p>
        </div>
        <div>
            <p>Instructors</p>
            <p class="fs-6">Capabuil Limited </p>
        </div>
        <div class="bg-info p-4 mb-4">
            <h5 class="bg-transparent">Enroll your team Today</h5>
            <ul class="bg-transparent">
                <li>Start your journey today</li>
            </ul>
            <ul class="bg-transparent">
                <li>Shareable Specialization & Program Certificate</li>
                <li>Learner - paced Learning Option</li>
                <li>Practical lessons underway</li>
            </ul>
        </div>
        <div>
            <h3>Get a Certificate</h3>
            <p>Shareable on Linkedin</p>
            <p>You can share your Liberator Certificates in the Certificate
                section of your LinkedIn profile, on printed resumes, CVC,
                or other documents.</p>
        </div>
        <div>
            <h2>Frequently Asked Questions</h2>
            <h5>Can I just enroll in a single program? </h5>
            <p>Yes! To get started, click the program card that interests you and enroll.
                You can enroll and complete the course to earn a shareable certificate,
                or you audit it to view the course material for free.

                When you subscribe to a course that is part of your Specialization,
                you are automatically subscribed. Visit your learned dashboard to
                track your progress.</p>
        </div>

    </div>
</div>
@endsection