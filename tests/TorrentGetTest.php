<?php

use OwenVoke\YTS\Movies;

it('can get the URL for a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getUrl())->toBeString();
});

it('can get the hash for a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getHash())->toBeString();
});

it('can get the quality for a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getQuality())->toBeString();
});

it('can get the seeds for a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getSeeds())->toBeInt();
});

it('can get the peers for a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getPeers())->toBeInt();
});

it('can get the size of a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getSize())->toBeString();
});

it('can get the size of a torrent in bytes', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getSizeBytes())->toBeInt();
});

it('can get the upload date for a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getDateUploaded())->toBeString();
});

it('can get the unix timestamp upload date for a torrent', function () {
    $torrent = Movies::details([
        'movie_id' => 10,
    ])->getTorrents()->first();
    expect($torrent->getDateUploadedUnix())->toBeInt();
});
