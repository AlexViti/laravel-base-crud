@extends('layouts.templates.base')

@section('title', 'Edit Comics')

@section('content')

<main>
  <div class="container">
    <h1>Edit Comics</h1>
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
          </div>
          @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $comic->title }}">
          </div>
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description">{{ $comic->description }}</textarea>
          </div>
          @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="thumb">Cover(URL)</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Cover(URL)" value="{{ $comic->thumb }}">
          </div>
          @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Sale Date" value="{{ $comic->sale_date }}">
          </div>
          @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Price" step="any" value="{{ $comic->price / 100 }}">
          </div>
          @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type" value="{{ $comic->type }}">
              <option value="">Select...</option>
              <option value="comic book">Comic Book</option>
              <option value="graphic novel">Graphic Novel</option>
            </select>
          </div>
          @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
