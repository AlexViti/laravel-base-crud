@extends('layouts.templates.base')

@section('title', 'Add Comics')

@section('content')

<main>
  <div class="container">
    <h1>Add Comics</h1>
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Series">
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="thumb">Cover(URL)</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
          </div>
          <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Price" step="any">
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
              <option value="">Select...</option>
              <option value="comic book">Comic Book</option>
              <option value="graphic novel">Graphic Novel</option>
            </select>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>

@endsection
