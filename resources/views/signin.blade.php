@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center gap-5 mt-4">
    <a href="#">Signup later</a>
    <div>
        <h2 class="text-center">Liberator</h2>
        <p>Book the best corporate events
            with us from top industry
            trainers in Kenya</p>
    </div>
    <div>
        <strong>Sign up or Login with</strong>
        <div class="btn-wrap mt-3">
            <a href="#" class="btn btn-lg btn-outline-secondary"><img src="{{ asset('assets/img/flat-color-icons_google.jpg') }}" />Google</a>
        </div>
    </div>
    <div>
        <a href="#" class="btn btn-lg btn-outline-secondary">Log in wIth your organization (SS0)</a>

    </div>
    <div class="btn-wrap">
        <a href="#" class="btn btn-lg btn-outline-secondary">Log in with Email</a>

    </div>
    <span class="text-center">Or</span>
    <a href="register" class="btn btn-primary">New to Liberator? Create an Account</a>
    <small>By creating an account, you accept Liberator’s Terms of
        Service and Privacy Policy</small>
</div>
@endsection