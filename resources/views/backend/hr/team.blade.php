@extends('inc.nav')
@section('content')
@include('inc.sidebar')
<div class="content-wrapper">
    <div class="container">
        <h2 class="mt-3"><strong>All your Colleagues</strong></h2>
        <p>Here are all your team-mates contact details</p>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Eugene Wamalwa</td>
                    <td>eugene.wamalwa@kengen.co.ke</td>
                    <td>Department: Customer Support</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Eugene Wamalwa</td>
                    <td>eugene.wamalwa@kengen.co.ke</td>
                    <td>Department: Customer Support</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Eugene Wamalwa</td>
                    <td>eugene.wamalwa@kengen.co.ke</td>
                    <td>Department: Customer Support</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection