<?php

use OwenVoke\YTS\Exceptions\NoDataFoundException;
use OwenVoke\YTS\Movies;

it('can retrieve a movies suggestions', function () {
    $movies = Movies::suggestions([
        'movie_id' => 10,
    ]);
    expect($movies)->toBeObject(Collection::class)->not->toBeEmpty()->and($movies->first()->getId())->toBeGreaterThan(0);
});

it('throws an error on invalid data', function () {
    Movies::suggestions();
})->throws(NoDataFoundException::class);
