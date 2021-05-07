<?php

namespace OwenVoke\YTS;

use Exception;
use PHPUnit\Framework\TestCase;

class TorrentSetTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanGetUrl(): void
    {
        $movie = new Torrent();
        $movie->setUrl('');
        $this->assertEquals('', $movie->getUrl());
    }

    /**
     * @throws Exception
     */
    public function testCanGetHash(): void
    {
        $movie = new Torrent();
        $movie->setHash('');
        $this->assertEquals('', $movie->getHash());
    }

    /**
     * @throws Exception
     */
    public function testCanGetQuality(): void
    {
        $movie = new Torrent();
        $movie->setQuality('');
        $this->assertEquals('', $movie->getQuality());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSeeds(): void
    {
        $movie = new Torrent();
        $movie->setSeeds(1);
        $this->assertEquals(1, $movie->getSeeds());
    }

    /**
     * @throws Exception
     */
    public function testCanGetPeers(): void
    {
        $movie = new Torrent();
        $movie->setPeers(1);
        $this->assertEquals(1, $movie->getPeers());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSize(): void
    {
        $movie = new Torrent();
        $movie->setSize('');
        $this->assertEquals('', $movie->getSize());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSizeBytes(): void
    {
        $movie = new Torrent();
        $movie->setSizeBytes(1);
        $this->assertEquals(1, $movie->getSizeBytes());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploaded(): void
    {
        $movie = new Torrent();
        $movie->setDateUploaded('');
        $this->assertEquals('', $movie->getDateUploaded());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploadedUnix(): void
    {
        $time = time();
        $movie = new Torrent();
        $movie->setDateUploadedUnix($time);
        $this->assertEquals($time, $movie->getDateUploadedUnix());
    }
}
