@extends('layouts.master')

@section('title','Drivers')

@section('page_title', 'Drivers')

@section('content')
    <h2>Drivers</h2>
    @foreach($drivers as $driver)
        {{$driver->firstname}} {{$driver->lastname}} heeft {{$driver->total_points}} punten<br/>
    @endforeach


@endsection