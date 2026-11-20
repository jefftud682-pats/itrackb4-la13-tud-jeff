@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="mb-4">
    <h1 class="h2 page-title mb-1">Movies Record System</h1>
    <p class="text-muted mb-3">
        A small system for adding your favorite movies.
    </p>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">
        <i class="bi bi-people me-1"></i>Open the movies list
    </a>
</div>

<div>
    <p>Total Movies: <strong>{{ $moviesCount }}</strong></p>
    <p>Total Genres: <strong>{{ $genresCount }}</strong></p>
</div>
<div class="d-flex align-items-center gap-3">
    <img src="{{ asset('img/Jeff.jpg') }}" alt="Profile Photo" width="96" height="96" class="rounded-circle">
    <div>
        <h2 class="h5 mb-1">Jeff S. Tud</h2>
        <p class="mb-0">BSIT · 4th Year · Block 4C</p>
    </div>
</div>


@endsection