@extends('inc.nav')
@section('content')
@include('inc.sidebar')
@section('content')
<div class="content-wrapper">

        <div class="container ">
            <a href="#" class="mb-3"><img src="{{ asset('assets/img/ep_back.svg') }}" /></a>

            <div class="d-flex flex-row justify-content-between align-items-center mb-4">
                <div>
                    <h3>Sync to my calendar</h3>
                    <p>Automatically sync all the programs and other related items to your calendar</p>
                </div>
                <div class="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>

                </div>

            </div>
            <h4 class="mb-4 bg-transparent">PUSH NOTIFICATIONS</h4>
            <div class="d-flex flex-row justify-content-between align-items-center mb-4">
                <div>
                    <h3>Promotions</h3>
                    <p>Receive notifications on offers and promotions
                        from Liberator</p>
                </div>
                <div class="">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>

                </div>

            </div>
            <h4 class="bg-transparent">SUPPORT</h4>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Report a Bug
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            About this App
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>

            </div>
            <h4 class="mt-3 bg-transparent">LOGOUT</h4>
            <div class="accordion accordion-flush" id="accordionFlush2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Log out
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlush2">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>


            </div>
            <div class="mt-4 py-4 px-4 mb-4">
                <a href="#">Delete Account</a>
            </div>
        </div>

</div>
@endsection