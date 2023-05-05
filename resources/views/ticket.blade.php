@extends('layouts.app')

@section('title')
    Ticket Page
@endsection

@include('component.navbar')
@section('content')
    @include('component.header-1')
    <div class="container mt-5" id="ticket">
        <div class="row gy-4">
            <h1 class="fw-bold text-primary">Tiket Tersedia : </h1>
            @foreach ($ticket as $t)
                <div class="col-md-6">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <h5 class="text-primary fw-bold">{{ $t->name }}</h5>
                            <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati eveniet ipsum facere
                                eius
                                laboriosam voluptates atque repudiandae doloribus assumenda labore libero ab itaque totam
                                voluptas perspiciatis, quae tempora modi eligendi?</h6>
                            <br>
                            <h6>Tanggal Tersedia : {{ $t->date }}</h6>
                            <h6>Tiket Tersedia : {{ $t->quota }}</h6>
                            <h6>Harga Tiket : {{ $t->price }}</h6>
                            <br>
                            <a href="/order/{{ $t->id }}" class="btn btn-primary p-2">Pesan sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('component.footer')
@endsection
