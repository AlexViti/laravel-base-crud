@extends('layouts.templates.base')

@section('title', $comic->title)

@section('content')

  <main>
    <div class="container">
      <h1>{{ $comic->title }}</h1>
    </div>
  </main>

@endsection
