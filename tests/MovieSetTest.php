<?php

namespace pxgamer\YTS;

use Exception;
use PHPUnit\Framework\TestCase;

class MovieSetTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanGetId(): void
    {
        $movie = new Movie();
        $movie->setId(1);
        $this->assertEquals(1, $movie->getId());
    }

    /**
     * @throws Exception
     */
    public function testCanGetUrl(): void
    {
        $movie = new Movie();
        $movie->setUrl('');
        $this->assertEquals('', $movie->getUrl());
    }

    /**
     * @throws Exception
     */
    public function testCanGetImdbCode(): void
    {
        $movie = new Movie();
        $movie->setImdbCode('');
        $this->assertEquals('', $movie->getImdbCode());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitle(): void
    {
        $movie = new Movie();
        $movie->setTitle('');
        $this->assertEquals('', $movie->getTitle());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitleEnglish(): void
    {
        $movie = new Movie();
        $movie->setTitleEnglish('');
        $this->assertEquals('', $movie->getTitleEnglish());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitleLong(): void
    {
        $movie = new Movie();
        $movie->setTitleLong('');
        $this->assertEquals('', $movie->getTitleLong());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSlug(): void
    {
        $movie = new Movie();
        $movie->setSlug('');
        $this->assertEquals('', $movie->getSlug());
    }

    /**
     * @throws Exception
     */
    public function testCanGetYear(): void
    {
        $movie = new Movie();
        $movie->setYear(1998);
        $this->assertEquals(1998, $movie->getYear());
    }

    /**
     * @throws Exception
     */
    public function testCanGetRating(): void
    {
        $movie = new Movie();
        $movie->setRating(1.0);
        $this->assertEquals(1.0, $movie->getRating());
    }

    /**
     * @throws Exception
     */
    public function testCanGetRuntime(): void
    {
        $movie = new Movie();
        $movie->setRuntime(666);
        $this->assertEquals(666, $movie->getRuntime());
    }

    /**
     * @throws Exception
     */
    public function testCanGetGenres(): void
    {
        $collection = collect([
            'Action'
        ]);
        $movie = new Movie();
        $movie->setGenres($collection);
        $this->assertEquals($collection, $movie->getGenres());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDownloadCount(): void
    {
        $movie = new Movie();
        $movie->setDownloadCount(666);
        $this->assertEquals(666, $movie->getDownloadCount());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLikeCount(): void
    {
        $movie = new Movie();
        $movie->setLikeCount(666);
        $this->assertEquals(666, $movie->getLikeCount());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSummary(): void
    {
        $movie = new Movie();
        $movie->setSummary('');
        $this->assertEquals('', $movie->getSummary());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDescriptionFull(): void
    {
        $movie = new Movie();
        $movie->setDescriptionFull('');
        $this->assertEquals('', $movie->getDescriptionFull());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSynopsis(): void
    {
        $movie = new Movie();
        $movie->setSynopsis('');
        $this->assertEquals('', $movie->getSynopsis());
    }

    /**
     * @throws Exception
     */
    public function testCanGetYtTrailerCode(): void
    {
        $movie = new Movie();
        $movie->setYtTrailerCode('');
        $this->assertEquals('', $movie->getYtTrailerCode());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLanguage(): void
    {
        $movie = new Movie();
        $movie->setLanguage('');
        $this->assertEquals('', $movie->getLanguage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetMpaRating(): void
    {
        $movie = new Movie();
        $movie->setMpaRating('');
        $this->assertEquals('', $movie->getMpaRating());
    }

    /**
     * @throws Exception
     */
    public function testCanGetBackgroundImage(): void
    {
        $movie = new Movie();
        $movie->setBackgroundImage('');
        $this->assertEquals('', $movie->getBackgroundImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetBackgroundImageOriginal(): void
    {
        $movie = new Movie();
        $movie->setBackgroundImageOriginal('');
        $this->assertEquals('', $movie->getBackgroundImageOriginal());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSmallCoverImage(): void
    {
        $movie = new Movie();
        $movie->setSmallCoverImage('');
        $this->assertEquals('', $movie->getSmallCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetMediumCoverImage(): void
    {
        $movie = new Movie();
        $movie->setMediumCoverImage('');
        $this->assertEquals('', $movie->getMediumCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLargeCoverImage(): void
    {
        $movie = new Movie();
        $movie->setLargeCoverImage('');
        $this->assertEquals('', $movie->getLargeCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetState(): void
    {
        $movie = new Movie();
        $movie->setState('');
        $this->assertEquals('', $movie->getState());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTorrents(): void
    {
        $collection = collect([
           new Torrent()
        ]);
        $movie = new Movie();
        $movie->setTorrents($collection);
        $this->assertEquals($collection, $movie->getTorrents());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploaded(): void
    {
        $movie = new Movie();
        $movie->setDateUploaded('');
        $this->assertEquals('', $movie->getDateUploaded());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploadedUnix(): void
    {
        $time = time();
        $movie = new Movie();
        $movie->setDateUploadedUnix($time);
        $this->assertEquals($time, $movie->getDateUploadedUnix());
    }
}
