<?php

use OwenVoke\YTS\Movie;
use OwenVoke\YTS\Torrent;

it('can set the id for a movie', function () {
    $movie = new Movie();
    $movie->setId(1);
    expect($movie->getId())->toEqual(1);
});

it('can set the torrents for a movie', function () {
    $collection = collect(new Torrent());
    $movie = new Movie();
    $movie->setTorrents($collection);
    expect($movie->getTorrents())->toEqual($collection);
});

it('can set the genres for a movie', function () {
    $collection = collect(['Action']);
    $movie = new Movie();
    $movie->setGenres($collection);
    expect($movie->getGenres())->toEqual($collection);
});

it('can set the URL for a movie', function () {
    $movie = new Movie();
    $movie->setUrl('');
    expect($movie->getUrl())->toEqual('');
});

it('can set the IMDb code for a movie', function () {
    $movie = new Movie();
    $movie->setImdbCode('tt9114286');
    expect($movie->getImdbCode())->toEqual('tt9114286');
});

it('can set the title for a movie', function () {
    $movie = new Movie();
    $movie->setTitle('The Lord of the Rings: The Two Towers');
    expect($movie->getTitle())->toEqual('The Lord of the Rings: The Two Towers');
});

it('can set the English title for a movie', function () {
    $movie = new Movie();
    $movie->setTitleEnglish('The Lord of the Rings: The Two Towers');
    expect($movie->getTitleEnglish())->toEqual('The Lord of the Rings: The Two Towers');
});

it('can set the long title for a movie', function () {
    $movie = new Movie();
    $movie->setTitleLong('The Lord of the Rings: The Two Towers');
    expect($movie->getTitleLong())->toEqual('The Lord of the Rings: The Two Towers');
});

it('can set the slug for a movie', function () {
    $movie = new Movie();
    $movie->setSlug('lord-of-rings-two-towers');
    expect($movie->getSlug())->toEqual('lord-of-rings-two-towers');
});

it('can set the year for a movie', function () {
    $movie = new Movie();
    $movie->setYear(2002);
    expect($movie->getYear())->toEqual(2002);
});

it('can set the rating for a movie', function () {
    $movie = new Movie();
    $movie->setRating(100.0);
    expect($movie->getRating())->toEqual(100.0);
});

it('can set the runtime for a movie', function () {
    $movie = new Movie();
    $movie->setRuntime(2000);
    expect($movie->getRuntime())->toEqual(2000);
});

it('can set the download count for a movie', function () {
    $movie = new Movie();
    $movie->setDownloadCount(1);
    expect($movie->getDownloadCount())->toEqual(1);
});

it('can set the like count for a movie', function () {
    $movie = new Movie();
    $movie->setLikeCount(1);
    expect($movie->getLikeCount())->toEqual(1);
});

it('can set the summary for a movie', function () {
    $movie = new Movie();
    $movie->setSummary('');
    expect($movie->getSummary())->toEqual('');
});

it('can set the full description for a movie', function () {
    $movie = new Movie();
    $movie->setDescriptionFull('');
    expect($movie->getDescriptionFull())->toEqual('');
});

it('can set the synopsis for a movie', function () {
    $movie = new Movie();
    $movie->setSynopsis('');
    expect($movie->getSynopsis())->toEqual('');
});

it('can set the YouTube trailer code for a movie', function () {
    $movie = new Movie();
    $movie->setYtTrailerCode('dQw4w9WgXcQ');
    expect($movie->getYtTrailerCode())->toEqual('dQw4w9WgXcQ');
});

it('can set the language for a movie', function () {
    $movie = new Movie();
    $movie->setLanguage('English');
    expect($movie->getLanguage())->toEqual('English');
});

it('can set the MPA rating for a movie', function () {
    $movie = new Movie();
    $movie->setMpaRating('R');
    expect($movie->getMpaRating())->toEqual('R');
});

it('can set the background image for a movie', function () {
    $movie = new Movie();
    $movie->setBackgroundImage('');
    expect($movie->getBackgroundImage())->toEqual('');
});

it('can set the original background image for a movie', function () {
    $movie = new Movie();
    $movie->setBackgroundImageOriginal('');
    expect($movie->getBackgroundImageOriginal())->toEqual('');
});

it('can set the small cover image for a movie', function () {
    $movie = new Movie();
    $movie->setSmallCoverImage('');
    expect($movie->getSmallCoverImage())->toEqual('');
});

it('can set the medium cover image for a movie', function () {
    $movie = new Movie();
    $movie->setMediumCoverImage('');
    expect($movie->getMediumCoverImage())->toEqual('');
});

it('can set the large cover image for a movie', function () {
    $movie = new Movie();
    $movie->setLargeCoverImage('');
    expect($movie->getLargeCoverImage())->toEqual('');
});

it('can set the upload date for a movie', function () {
    $movie = new Movie();
    $movie->setDateUploaded('2021-01-01 01:01:01');
    expect($movie->getDateUploaded())->toEqual('2021-01-01 01:01:01');
});

it('can set the unix timestamp upload date for a movie', function () {
    $movie = new Movie();
    $movie->setDateUploadedUnix(1620636301);
    expect($movie->getDateUploadedUnix())->toEqual(1620636301);
});
