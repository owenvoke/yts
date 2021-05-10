<?php

use OwenVoke\YTS\Torrent;

it('can set the URL for a torrent', function () {
    $torrent = new Torrent();
    $torrent->setUrl('');
    expect($torrent->getUrl())->toBeString()->toEqual('');
});

it('can set the hash for a torrent', function () {
    $torrent = new Torrent();
    $torrent->setHash('');
    expect($torrent->getHash())->toBeString()->toEqual('');
});

it('can set the quality for a torrent', function () {
    $torrent = new Torrent();
    $torrent->setQuality('');
    expect($torrent->getQuality())->toBeString()->toEqual('');
});

it('can set the seeds for a torrent', function () {
    $torrent = new Torrent();
    $torrent->setSeeds(100);
    expect($torrent->getSeeds())->toBeInt()->toEqual(100);
});

it('can set the peers for a torrent', function () {
    $torrent = new Torrent();
    $torrent->setPeers(100);
    expect($torrent->getPeers())->toBeInt()->toEqual(100);
});

it('can set the size of a torrent', function () {
    $torrent = new Torrent();
    $torrent->setSize('100MB');
    expect($torrent->getSize())->toBeString()->toEqual('100MB');
});

it('can set the size of a torrent in bytes', function () {
    $torrent = new Torrent();
    $torrent->setSizeBytes(1024);
    expect($torrent->getSizeBytes())->toBeInt()->toEqual(1024);
});

it('can set the upload date for a torrent', function () {
    $torrent = new Torrent();
    $torrent->setDateUploaded('2021-01-01 01:01:01');
    expect($torrent->getDateUploaded())->toBeString()->toEqual('2021-01-01 01:01:01');
});

it('can set the unix timestamp upload date for a torrent', function () {
    $torrent = new Torrent();
    $torrent->setDateUploadedUnix(1620636301);
    expect($torrent->getDateUploadedUnix())->toBeInt()->toEqual(1620636301);
});
