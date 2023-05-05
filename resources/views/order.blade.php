@extends('layouts.app')

@section('title')
    Order Page
@endsection

@include('component.navbar')
@section('content')
    <div class="container">
        <div class="row gy-3 justify-content-center">
            <div class="col-6">
                <div class="card border-0">
                    <div class="card-body p-4">
                        <form method="POST" action="/order/{{ $ticket->id }}">
                            @csrf
                            <div class="form-group mb-3">
                                <select name="ticket_id" class="form-control p-3">
                                    <option value="{{ $ticket->id }}">{{ $ticket->name }} - Rp {{ $ticket->price }}
                                    </option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" name="qty" class="form-control p-3" id="qty"
                                    placeholder="Jumlah Tiket : ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" name="amount" class="form-control p-3" id="amount" value="0"
                                    readonly placeholder="test">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3">Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const qtyInput = document.getElementById('qty');
        const hargaInput = document.getElementById('amount');
        qtyInput.addEventListener('input', () => {
            const harga = {{ $ticket->price }};
            const qty = qtyInput.value;
            hargaInput.value = harga * qty;
            console.log(harga);
        });
    </script>

    @include('component.footer')
@endsection
