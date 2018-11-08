@extends('layouts.master')

@section('header')
    <h2>Artikel {{ $id }}</h2>
@endsection

@section('content')
    Dit is een artikel {{ $id }}
@endsection