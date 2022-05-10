<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  {{-- JS --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

  @include('layouts.partials.header')

  @yield('content')

  @include('layouts.partials.footer')

</body>
</html>
