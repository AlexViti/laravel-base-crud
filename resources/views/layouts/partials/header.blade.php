<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item {{ Request::is('comics*') ? 'active_' : '' }}">
          <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('comics.create') }}">Add Comics</a>
        </li>
      </ul>
      <a href="{{ url()->previous() }}" class="btn btn-primary">&larr; Back</a>
    </div>
  </div>
</nav>
