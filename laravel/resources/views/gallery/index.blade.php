@extends('layouts.master')

@section('content')
    <h1>Photo Gallery</h1>

    <div class="container">
    <div class="row">
        @foreach ($photos as $photo)
        <div class="col">       
        <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="photos/{{ $photo->photo }}" alt="Card image cap">
                   <div class="card-body">
                          <h5 class="card-title">{{ $photo->title }}</h5>
                              <p class="card-text">{{ $photo->description }}</p>
                                  </div>
                                            </div>
                                                    </div> 
    @endforeach
    </div>
    </div>

    <a href="{{ route('gallery.add_photo') }}" class="btn">Foto toevoegen</a>
@endsection