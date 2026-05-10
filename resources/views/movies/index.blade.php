@extends('layouts.app')

@section('title', 'Películas')

@section('content')

    <h1 class="mb-4">Películas</h1>

    <div class="list-group">

        @foreach ($movies as $movie)
            <div class="list-group-item d-flex justify-content-between align-items-center">

                <span>
                    {{ $movie['title'] }}
                    <small class="text-muted">
                        ({{ $movie['score'] }})
                    </small>
                </span>

                <a href="/movies/{{ $movie['id'] }}" class="btn btn-sm btn-primary">
                    Ver detalles
                </a>

            </div>
        @endforeach

    </div>

@endsection
