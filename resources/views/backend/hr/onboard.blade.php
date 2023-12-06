@extends('inc.nav')

@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <h2 class="mt-3"><strong>Onboard</strong></h2>
        <p class="fs-6">Enter the required information for each of your
            team mates and make sure it matches with your records.</p>
        <h6><strong>Upload the details of your team-mates</strong></h6>
        <form style="width:800px" class="upload-form">
            <div class="d-flex gap-4 flex-row team-mb-name">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                </div>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Department eg accounts">
            </div>
            <div class="mb-3" style="width:100%">
                <textarea placelholder="Description" style="width:100%"></textarea>
            </div>
            <div class="mb-3">
                <input type="button" class="form-control" value="Upload" class="btn btn-secondary">
            </div>
        </form>
        <a href="#">See your saved records here</a>


    </div>
</div>


@endsection