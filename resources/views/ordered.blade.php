@extends('layouts.app')

@section('title')
    Ordered Page
@endsection

@include('component.navbar')
@section('content')
    <div class="container">
        <div class="row gy-4 justify-content-center align-items-center" style="min-height: 52vh">
            @foreach ($order as $o)
                <div class="col-md-4">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-between align-items-end">
                            <div>
                                <h6 class="text-primary fw-bold">{{ $o->ticket->name }}</h6>
                                <img src="{{ asset('aset/carousel-1.jpg') }}" class="img-fluid rounded">
                                <br>
                                <br>
                                <h6>Jumlah tiket : <span class="fw-bold">{{ $o->qty }}</span></h6>
                                <h6>Harga tiket : <span class="fw-bold">{{ $o->amount }}</span></h6>
                                <br>
                                <a href="detail/{{ $o->id }}" class="btn btn-primary">Detail</a>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('component.footer')

    <style>
        .card {
            text-decoration: none;
            color: black;
            transition: all .2s ease-in-out;
        }

        .card:hover {
            color: black;
        }
    </style>
@endsection
