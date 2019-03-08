<?php

namespace pxgamer\YTS;

use Exception;
use PHPUnit\Framework\TestCase;

class TorrentGetTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanGetUrl(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getUrl());
    }

    /**
     * @throws Exception
     */
    public function testCanGetHash(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getHash());
    }

    /**
     * @throws Exception
     */
    public function testCanGetQuality(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getQuality());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSeeds(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getSeeds());
    }

    /**
     * @throws Exception
     */
    public function testCanGetPeers(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getPeers());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSize(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getSize());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSizeBytes(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getSizeBytes());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploaded(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsString($torrent->getDateUploaded());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploadedUnix(): void
    {
        $torrent = Movies::details([
            'movie_id' => 10,
        ])->getTorrents()->first();
        $this->assertIsInt($torrent->getDateUploadedUnix());
    }
}
