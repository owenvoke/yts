<?php

namespace pxgamer\YTS;

use PHPUnit\Framework\TestCase;

/**
 * Class TorrentGetTest
 */
class TorrentGetTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanGetUrl()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getUrl());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetHash()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getHash());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetQuality()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getQuality());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSeeds()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getSeeds());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetPeers()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getPeers());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSize()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getSize());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSizeBytes()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getSizeBytes());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDateUploaded()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getDateUploaded());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDateUploadedUnix()
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getDateUploadedUnix());
    }
}
