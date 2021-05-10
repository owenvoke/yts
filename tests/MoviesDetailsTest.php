<?php

use OwenVoke\YTS\Movie;
use OwenVoke\YTS\Movies;

it('can retrieve a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie)->toBeInstanceOf(Movie::class);
});

it('can retrieve a movie with images', function () {
    $movie = Movies::details([
        'movie_id' => 10,
        'with_images' => true,
    ]);
    expect($movie)->toBeInstanceOf(Movie::class);
});

it('can retrieve a movie with the cast', function () {
    $movie = Movies::details([
        'movie_id' => 10,
        'with_cast' => true,
    ]);
    expect($movie)->toBeInstanceOf(Movie::class);
});

it('throws an error on invalid data', function () {
    Movies::details();
})->throws(InvalidArgumentException::class);
