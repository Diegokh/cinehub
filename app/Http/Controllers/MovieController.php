<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    private $movies = [
        1 => [
            'id' => 1,
            'title' => 'Inception',
            'year' => 2010,
            'director' => 'Christopher Nolan',
            'score' => 8.8
        ],
        2 => [
            'id' => 2,
            'title' => 'The Matrix',
            'year' => 1999,
            'director' => 'Wachowski Sisters',
            'score' => 8.7
        ],
        3 => [
            'id' => 3,
            'title' => 'Interstellar',
            'year' => 2014,
            'director' => 'Christopher Nolan',
            'score' => 7
        ]
    ];

    public function index(Request $request)
{
    $min = (float) $request->query('min', 0);

    $movies = array_filter(
        $this->movies,
        function ($movie) use ($min) {
            return $movie['score'] >= $min;
        }
    );

    return view('movies.index', [
        'movies' => $movies
    ]);
}

    public function show($id)
    {
        if (!isset($this->movies[$id])) {
            abort(404);
        }

        return view('movies.show', [
            'movie' => $this->movies[$id]
        ]);
    }
}
