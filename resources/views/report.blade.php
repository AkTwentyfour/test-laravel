@extends('layouts.app')

@include('component.navbar')
@section('content')
    <div class="container">
        <h1 class="text-primary fw-bold">Report Page</h1>
        @foreach ($order as $o)
            <h1>nama ticket : {{ $o->ticket->name }}</h1>
            <h1>nama user yang membeli tiket : {{ $o->user->name }}</h1>
            <h1>jumlah tiket : {{ $o->qty }}</h1>
        @endforeach
    </div>
@endsection
