@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
    <a href="#"><img src="{{ asset('assets/img/chevron-left.svg') }}" /></a>
        <h4 class="mt-4 ">Our Instructors</h4>
        <strong class="text-center">Here are the names of our trusted
            trainers/instructors</strong>
        <p><small>Click the name for more detail</small></p>
        <ul class="d-flex flex-column gap-3 instructors-list">
            <li><a href="#">CPA Peter Kioko</a></li>
            <li><a href="#">CS. CPA. DR. Peter Kitonyo (PhD)</a></li>
            <li><a href="#">FCPA Evans Mulera</a></li>
            <li><a href="#">David Patrick Nyobange</a></li>
            <li><a href="#">Collince Gworo</a></li>
            <li><a href="#">Anne Deya</a></li>
            <li><a href="#">Hellen Omondi</a></li>
            <li><a href="#">Juliet Mmboga</a></li>
            <li><a href="#">Nelly Mzerah</a></li>
            <li><a href="#">Marcella Riwo Abudho</a></li>
            <li><a href="#">Henry Naymogosa</a></li>
            <li><a href="#">Jackline Olando</a></li>
            <li><a href="#">Dr. Angeline Akinyi PHD HRM</a></li>
            <li><a href="#">CS. CPA. DR. Peter Kitonyo (PhD)</a></li>
            <li><a href="#">Patricia W. Kathurima</a></li>
            <li><a href="#">Charles Nthiwa</a></li>
            <li><a href="#">William Mwenda</a></li>
            <li><a href="#">Mr. Keller Tobias Mouko</a></li>
            <li><a href="#">CPA Kairu Magutu</a></li>
            <li><a href="#">CPA DR. Richard M. Kiai</a></li>
            <li><a href="#">PhD. Tumuti W Joshua</a></li>
            <li><a href="#">Christopher Mwanza Wesonga</a></li>
            <li><a href="#">Oscar Onyango Sangoro</a></li>
            <li><a href="#">Anderson Chai</a></li>
            <li><a href="#">Moses Mkalla</a></li>
            <li><a href="#">Elijah Waga</a></li>
            <li><a href="#">George Karisa</a></li>
            <li><a href="#">Wilfred Mbogo</a></li>
            <li><a href="#">Peter Kiarie</a></li>
            <li><a href="#">Eunice Mugai</a></li>
            <li><a href="#">Roman Gona</a></li>
        </ul>
    </div>


    @endsection