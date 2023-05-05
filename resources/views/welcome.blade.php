@extends('layouts.app')

@include('component.navbar')
@section('content')
    <div class="container">
        <div class="row gy-3 justify-content-start align-items-center" style="height: 80vh;">
            <div class="col-md-6">
                <div>
                    <h1 class="fw-bold text-primary">Wonderful Guci</h1>
                    <h4>Online Ticket & Information Services</h4>
                    <br>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae magnam aliquid, aspernatur at
                        esse obcaecati, numquam veniam dolor laudantium voluptate fugit sint quasi deleniti dolores debitis
                        nesciunt temporibus cupiditate maxime?</div>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <img src="{{ asset('aset/customer-service-1.png') }}">
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row gy-3">
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between align-items-start">
                        <img src="{{ asset('aset/customer.png') }}" height="35">
                        <div class="ms-3">
                            <h5 class="fw-bold text-primary mt-2">Information Services</h5>
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores quod optio modi, aliquid exercitationem 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between align-items-start">
                        <img src="{{ asset('aset/personal.png') }}" height="35">
                        <div class="ms-3">
                            <h5 class="fw-bold text-primary mt-2">Online Ticket</h5>
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores quod optio modi, aliquid exercitationem 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between align-items-start">
                        <img src="{{ asset('aset/profile.png') }}" height="35">
                        <div class="ms-3">
                            <h5 class="fw-bold text-primary mt-2">Guci Profile</h5>
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolores quod optio modi, aliquid exercitationem 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
