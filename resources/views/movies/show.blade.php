@extends('layouts.app')

@section('title', $movie['title'])

@section('content')

    <h1>{{ $movie['title'] }}</h1>

    <div class="card mt-4">
        <div class="card-body">

            <p>
                <strong>ID:</strong>
                {{ $movie['id'] }}
            </p>

            <p>
                <strong>Año:</strong>
                {{ $movie['year'] }}
            </p>

            <p>
                <strong>Director:</strong>
                {{ $movie['director'] }}
            </p>

            <a href="/movies" class="btn btn-secondary">
                Volver
            </a>

        </div>
    </div>

@endsection