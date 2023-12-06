@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#"><img src="{{ asset('assets/img/chevron-left.svg') }}" /></a>
            <h3 class="mt-4 ">Payment</h3>
        </div>
        <p style="color: #5A5A5A;">Choose a payment method</p>
        <ul class="d-flex">
            <li><img src="{{ asset('assets/img/ic_outline-image.svg') }}" /></li>
            <li><img src="{{ asset('assets/img/ic_outline-image.svg') }}" /></li>
            <li><img src="{{ asset('assets/img/ic_outline-image.svg') }}" /></li>
        </ul>
        <h4>Card number</h4>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control card-num" id="exampleFormControlInput1" placeholder="1234    5678    3456">
            </div>
            <h5>Cash header name</h5>
            <div class="mb-3">
                <input type="text" class="form-control card-num" id="exampleFormControlInput1" placeholder="Simon Mwachi">
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h4>Expire date</h4>
                    <input type="text" class="form-control card-num" id="exampleFormControlInput1" placeholder="25/7">
                </div>
                <div>
                    <h4>CVV</h4>
                    <input type="text" class="form-control card-num" id="exampleFormControlInput1" placeholder="9432">
                </div>

            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <div class="d-flex justify-content-between">
                <h4>Total</h4>
                <p>Kshs. 89,850.00 </p>
            </div>
            <input type="submit" class="btn btn-dark p-3 mb-4" value="Pay Now"/>
        </form>
    </div>
</div>


@endsection