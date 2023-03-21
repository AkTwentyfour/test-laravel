@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gy-3 justify-content-center">
            @foreach ($order as $o)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="fw-bold">{{ $o->ticket->name }}</h6>
                            <br>
                            <h6>Jumlah tiket : <span class="fw-bold">{{ $o->qty }}</span></h6>
                            <h6>Harga tiket : <span class="fw-bold">{{ $o->amount }}</span></h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
