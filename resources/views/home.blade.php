@extends('layouts.templates.base')

@section('title', 'Home')

@section('content')
<div class="container">
  <x-carousel id="carousel-2" :indicators="true" :control="true" class="mb-3">
    @foreach ($comics as $comic)
    <x-slot :name="'slot_' . $loop->iteration">
      <x-card :overlay="true">
        <x-slot name="image">
          <div class="d-flex justify-content-center bg-primary">
            <x-image :lazyload="false" src="{{ $comic->thumb }}" class="img-fluid w-50"/>
          </div>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center align-items-end h-100">
            <a href="{{ route('comics.show', $comic->id) }}" class="text-white bg-primary display-1">{{ $comic->title }}</a>
          </div>
        </x-slot>
      </x-card>
    </x-slot>
    @endforeach
  </x-carousel>
</div>
@endsection
