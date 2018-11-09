@extends('layouts.master')

@section('title', 'Home')

@section('page_title')
    Homepage
@endsection

@section('content')
    <h1>HOMEPAGE</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, at eveniet exercitationem expedita labore laboriosam molestias optio reprehenderit suscipit temporibus voluptate voluptates voluptatibus! Dolor ipsa laborum, magni molestiae quas repellat!</p>
@endsection

@section('navigation')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('artikel/123') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection