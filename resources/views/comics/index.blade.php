@extends('layouts.templates.base')

@section('title', 'Comics')

@section('content')

  <main>
    <div class="container">
      <h1>Comics</h1>
      <div class="row">
        @foreach ($comics as $comic)
          <div class="col-md-4 g-4">
            <div class="card h-100 mb-4">
              <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ $comic->series }}</h5>
                <p class="card-text">{{ substr($comic->description, 0, 100) }}...</p>
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>

@endsection
