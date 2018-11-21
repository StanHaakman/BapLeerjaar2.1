@extends('layouts.master')

@section('header')
    <h2>Artikel {{ $id }}</h2>
@endsection

@section('content')
    Dit is een artikel {{ $id }}
@endsection

@section('navigation')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('')}}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('artikel/123') }}">Artikel <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Datum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection