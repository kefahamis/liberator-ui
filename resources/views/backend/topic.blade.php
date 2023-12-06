@extends('inc.index')
@section('content')
<div class="container">
    <a href="#" class="mb-3 explore-btn"><img src="{{ asset('assets/img/ep_back.svg') }}" />Explore by Topic</a>

    <ul class="d-flex flex-column gap-3">
      <li>Business</li>
      <li>Data Analytics</li>
      <li>Leadership</li>
      <li>Entrepreneurship</li>
      <li>Human Resource</li>
      <li>Tax</li>
      <li>Office Operations</li>
      <li>Personal Development</li>
 
    </ul>
</div>

@endsection