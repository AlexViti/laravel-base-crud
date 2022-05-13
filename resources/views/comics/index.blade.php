@extends('layouts.templates.base')

@section('title', 'Comics')

@section('content')

<main>
  <div class="container">
    <h1>Comics</h1>
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Add Comics</a>
    <div class="row">
      @foreach ($comics as $comic)
        <div class="col-md-4 mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="{{ filter_var($comic->thumb, FILTER_VALIDATE_URL) ? $comic->thumb : 'https://dangerousminds.net/content/uploads/images/made/content/uploads/images/generic01COVER_465_708_int.jpg' }}" alt="{{ $comic->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->series }}</h5>
              <p class="card-text">{{ substr($comic->description, 0, 100) }}...</p>
              <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Read more</a>
              <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{ $comics->links() }}
  </div>
</main>

@endsection
