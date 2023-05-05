@extends('layouts.app')

@section('title')
    Detail Page
@endsection

@section('content')
    <div class="container">
        <div class="row gy-3 justify-content-center align-items-center" style="min-height: 90vh">
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body p-4">
                        <h5 class="fw-bold">{{ $order->ticket->name }}</h5>
                        <br>
                        <h6>Jumlah tiket : <span class="fw-bold">{{ $order->qty }}</span></h6>
                        <h6>Harga tiket : <span class="fw-bold">{{ $order->amount }}</span></h6>
                        <br>
                        <br>
                        <h6>Dipesan Oleh : <span class="fw-bold">{{ Auth::user()->name }}</span></h6>
                        <div>
                            <button class="btn btn-primary mt-2 w-100" onclick="window.print()">Print Tiket</button>
                            {{-- <form action="{{ $order->id }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger mt-2 w-100">Hapus Tiket</button>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-end">
                <a href="/ordered" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
