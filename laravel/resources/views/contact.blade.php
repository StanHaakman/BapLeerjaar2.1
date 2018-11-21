@extends('layouts.master')

@section('title', 'Contact')

@section('page_title')
    Contact
@endsection

@section('content')
    <form action="" method="post">
        <label for="firstname">Voornaam:</label>
        <br>
        <input type="text" id="firstname" placeholder="Voornaam">
        <br>
        <label for="lastname">Achternaam:</label>
        <br>
        <input type="text" id="lastname" placeholder="Achternaam">
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="text" id="email" placeholder="Email">
        <br>
        <label for="telefoonnummer">Telefoon nummer:</label>
        <br>
        <input type="text" id="telefoonnummer" placeholder="Telefoon nummer">
        <br>
    </form>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('artikel/123') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Datum</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('contact')}}">Contact <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('aanmelden')}}">Aanmelden</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection