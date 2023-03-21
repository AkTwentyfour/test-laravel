@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gy-3">
            @foreach ($ticket as $t)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $t->name }}</h5>
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
@endsection
