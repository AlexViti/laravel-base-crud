@extends('layouts.templates.base')

@section('title', 'Home')

@section('content')

  <main class="container">
    <h1>Home</h1>
    <a href="{{ route('comics.index') }}">Comics</a>
  </main>

@endsection
