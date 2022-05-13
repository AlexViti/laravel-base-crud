@extends('layouts.templates.base')

@section('title', $comic->title)

@section('content')

  <main>
    <div class="container">
      <h1>{{ $comic->title }}</h1>
      <h2>{{ $comic->series }}</h2>
      <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
      <p>{{ $comic->description }}</p>
      <div class="type">
        Type: <span>{{ $comic->type }}</span>
      </div>
      <div class="price">
        Price: <span>{{ $comic->price / 100 }} USD</span>
      </div>
      <button class="btn btn-primary">Buy</button>
      <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>
      {{-- <a href="{{ route('comics.delete', $comic->id) }}" class="btn btn-danger">Delete</a> --}}
    </div>
  </main>

@endsection
