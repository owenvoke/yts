<?php

namespace pxgamer\YTS;

use PHPUnit\Framework\TestCase;

/**
 * Class MovieSetTest
 */
class MovieSetTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanGetId()
    {
        $movie = new Movie();
        $movie->setId(1);
        $this->assertEquals(1, $movie->getId());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetUrl()
    {
        $movie = new Movie();
        $movie->setUrl('');
        $this->assertEquals('', $movie->getUrl());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetImdbCode()
    {
        $movie = new Movie();
        $movie->setImdbCode('');
        $this->assertEquals('', $movie->getImdbCode());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTitle()
    {
        $movie = new Movie();
        $movie->setTitle('');
        $this->assertEquals('', $movie->getTitle());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTitleEnglish()
    {
        $movie = new Movie();
        $movie->setTitleEnglish('');
        $this->assertEquals('', $movie->getTitleEnglish());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTitleLong()
    {
        $movie = new Movie();
        $movie->setTitleLong('');
        $this->assertEquals('', $movie->getTitleLong());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSlug()
    {
        $movie = new Movie();
        $movie->setSlug('');
        $this->assertEquals('', $movie->getSlug());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetYear()
    {
        $movie = new Movie();
        $movie->setYear(1998);
        $this->assertEquals(1998, $movie->getYear());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetRating()
    {
        $movie = new Movie();
        $movie->setRating(1.0);
        $this->assertEquals(1.0, $movie->getRating());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetRuntime()
    {
        $movie = new Movie();
        $movie->setRuntime(666);
        $this->assertEquals(666, $movie->getRuntime());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetGenres()
    {
        $collection = collect([
            'Action'
        ]);
        $movie = new Movie();
        $movie->setGenres($collection);
        $this->assertEquals($collection, $movie->getGenres());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDownloadCount()
    {
        $movie = new Movie();
        $movie->setDownloadCount(666);
        $this->assertEquals(666, $movie->getDownloadCount());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetLikeCount()
    {
        $movie = new Movie();
        $movie->setLikeCount(666);
        $this->assertEquals(666, $movie->getLikeCount());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSummary()
    {
        $movie = new Movie();
        $movie->setSummary('');
        $this->assertEquals('', $movie->getSummary());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDescriptionFull()
    {
        $movie = new Movie();
        $movie->setDescriptionFull('');
        $this->assertEquals('', $movie->getDescriptionFull());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSynopsis()
    {
        $movie = new Movie();
        $movie->setSynopsis('');
        $this->assertEquals('', $movie->getSynopsis());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetYtTrailerCode()
    {
        $movie = new Movie();
        $movie->setYtTrailerCode('');
        $this->assertEquals('', $movie->getYtTrailerCode());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetLanguage()
    {
        $movie = new Movie();
        $movie->setLanguage('');
        $this->assertEquals('', $movie->getLanguage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetMpaRating()
    {
        $movie = new Movie();
        $movie->setMpaRating('');
        $this->assertEquals('', $movie->getMpaRating());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetBackgroundImage()
    {
        $movie = new Movie();
        $movie->setBackgroundImage('');
        $this->assertEquals('', $movie->getBackgroundImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetBackgroundImageOriginal()
    {
        $movie = new Movie();
        $movie->setBackgroundImageOriginal('');
        $this->assertEquals('', $movie->getBackgroundImageOriginal());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSmallCoverImage()
    {
        $movie = new Movie();
        $movie->setSmallCoverImage('');
        $this->assertEquals('', $movie->getSmallCoverImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetMediumCoverImage()
    {
        $movie = new Movie();
        $movie->setMediumCoverImage('');
        $this->assertEquals('', $movie->getMediumCoverImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetLargeCoverImage()
    {
        $movie = new Movie();
        $movie->setLargeCoverImage('');
        $this->assertEquals('', $movie->getLargeCoverImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetState()
    {
        $movie = new Movie();
        $movie->setState('');
        $this->assertEquals('', $movie->getState());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTorrents()
    {
        $collection = collect([
           new Torrent()
        ]);
        $movie = new Movie();
        $movie->setTorrents($collection);
        $this->assertEquals($collection, $movie->getTorrents());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDateUploaded()
    {
        $movie = new Movie();
        $movie->setDateUploaded('');
        $this->assertEquals('', $movie->getDateUploaded());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDateUploadedUnix()
    {
        $time = time();
        $movie = new Movie();
        $movie->setDateUploadedUnix($time);
        $this->assertEquals($time, $movie->getDateUploadedUnix());
    }
}