<?php

use OwenVoke\YTS\Movies;
use Illuminate\Support\Collection;

it('can get id for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getId())->toBeInt();
});

it('can get URL for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getUrl())->toBeString();
});

it('can get IMDb code for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getImdbCode())->toBeString();
});

it('can get title for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getTitle())->toBeString();
});

it('can get English title for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getTitleEnglish())->toBeString();
});

it('can get long title for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getTitleLong())->toBeString();
});

it('can get slug for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getSlug())->toBeString();
});

it('can get year for movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getYear())->toBeInt();
});

it('can get rating for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getRating())->toBeFloat();
});

it('can get runtime for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getRuntime())->toBeInt();
});

it('can get genres for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getGenres())->toBeObject(Collection::class)->not->toBeEmpty()
        ->and($movie->getGenres()->first())->toBeString();
});

it('can get download count for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getDownloadCount())->toBeInt();
});

it('can get like count for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getLikeCount())->toBeInt();
});

it('can get summary for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getSummary())->toBeNull();
});

it('can get the full description for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getDescriptionFull())->toBeString();
});

it('can get the synopsis for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getSynopsis())->toBeNull();
});

it('can get the YouTube trailer code for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getYtTrailerCode())->toBeString();
});

it('can get the language for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getLanguage())->toBeString();
});

it('can get the MPA rating for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getMpaRating())->toBeString();
});

it('can get the background image for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getBackgroundImage())->toBeString();
});

it('can get the original background image for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getBackgroundImageOriginal())->toBeString();
});

it('can get the small cover image for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getSmallCoverImage())->toBeString();
});

it('can get the medium cover image for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getMediumCoverImage())->toBeString();
});

it('can get the large cover image for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getLargeCoverImage())->toBeString();
});

it('can get the state for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getState())->toBeNull();
});

it('can get the torrents for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getTorrents())->toBeObject(Collection::class)->not->toBeEmpty()->and($movie->getTorrents()->first()->getUrl())->toBeString();
});

it('can get the upload date for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getDateUploaded())->toBeString();
});

it('can get the Unix upload timestamp for a movie', function () {
    $movie = Movies::details([
        'movie_id' => 10,
    ]);
    expect($movie->getDateUploadedUnix())->toBeInt();
});
