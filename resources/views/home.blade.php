@extends('layouts.app')

@section('title')
    Home Page
@endsection

@include('component.navbar')
@section('content')
    <div>
        @include('component.header-1')
        <style>
            .p {
                min-height: 40vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
        </style>
    </div>
    @include('component.header-2')
    <div class="container">
        <div class="row gy-3">
            <div class="col-md-6">
                @include('component.ticket', ['ticket' => $ticket])
            </div>
            <div class="col-md-6">
                @include('component.carousel', ['d-md-none'])
            </div>
        </div>
    </div>
    @include('component.footer')
@endsection
