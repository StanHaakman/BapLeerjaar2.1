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
        <input type="text" id="telefoonnummer" placeholder="Bijv. 06 48607062">
        <br>
        <label for="trainingsdageen">Trainings dag 1</label>
        <br>
        <select name="Dag 1" id="tainingsdageen">
            <option value="maandag">Maandag 8:45</option>
            <option value="woensdag">Woensdag 19:00</option>
            <option value="vrijdag">Vrijdag 19:00</option>
            <option value="maandag">Zondag 9:30</option>
        </select>
        <br>
        <label for="trainingsdagtwee">Trainings dag 2</label>
        <br>
        <select name="Dag 2" id="trainingsdagtwee">
            <option value="maandag">Maandag 8:45</option>
            <option value="woensdag">Woensdag 19:00</option>
            <option value="vrijdag">Vrijdag 19:00</option>
            <option value="maandag">Zondag 9:30</option>
        </select>
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
                    <a class="nav-link" href="{{url('')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('artikel/123') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Datum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('aanmelden')}}">Aanmelden <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
@endsection