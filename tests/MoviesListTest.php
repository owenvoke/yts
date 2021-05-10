<?php

use OwenVoke\YTS\Movies;

it('can retrieve movies', function (): void {
    $movies = Movies::list();
    expect($movies)->toBeObject(Collection::class)->not->toBeEmpty()
        ->and($movies->first()->getId())->toBeGreaterThan(0);
});

it('can retrieve movies by quality filter', function (): void {
    $movies = Movies::list(['quality' => Movies::QUALITY_720]);
    expect($movies)->toBeObject(Collection::class)->not->toBeEmpty()
        ->and($movies->first()->getId())->toBeGreaterThan(0);
});

it('can retrieve movies by query', function (): void {
    $movies = Movies::list(['query_term' => 'Lord of the Rings']);
    expect($movies)->toBeObject(Collection::class)->not->toBeEmpty()
        ->and($movies->first()->getId())->toBeGreaterThan(0);
});

it('can retrieve movies by page', function (): void {
    $movies = Movies::list(['page' => 2]);
    expect($movies)->toBeObject(Collection::class)->not->toBeEmpty()
        ->and($movies->first()->getId())->toBeGreaterThan(0);
});

it('can retrieve movies by minimum rating', function (): void {
    $movies = Movies::list(['minimum_rating' => 5]);
    expect($movies)->toBeObject(Collection::class)->not->toBeEmpty()
        ->and($movies->first()->getId())->toBeGreaterThan(0);
});

it('can retrieve movies by genre', function (): void {
    $movies = Movies::list(['genre' => 'Action']);
    expect($movies)->toBeObject(Collection::class)->not->toBeEmpty()
        ->and($movies->first()->getId())->toBeGreaterThan(0);
});
