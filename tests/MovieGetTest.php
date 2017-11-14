<?php

namespace pxgamer\YTS;

use PHPUnit\Framework\TestCase;

/**
 * Class MovieGetTest
 */
class MovieGetTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanGetId()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('int', $movie->getId());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetUrl()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getUrl());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetImdbCode()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getImdbCode());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTitle()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getTitle());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTitleEnglish()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getTitleEnglish());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTitleLong()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getTitleLong());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSlug()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getSlug());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetYear()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('int', $movie->getYear());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetRating()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('float', $movie->getRating());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetRuntime()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('int', $movie->getRuntime());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetGenres()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertTrue($movie->getGenres()->isNotEmpty());
        $this->assertInternalType('string', $movie->getGenres()->first());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDownloadCount()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('int', $movie->getDownloadCount());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetLikeCount()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('int', $movie->getLikeCount());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSummary()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertInternalType('string', $movie->getSummary());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDescriptionFull()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertInternalType('string', $movie->getDescriptionFull());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSynopsis()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertInternalType('string', $movie->getSynopsis());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetYtTrailerCode()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getYtTrailerCode());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetLanguage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getLanguage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetMpaRating()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getMpaRating());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetBackgroundImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getBackgroundImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetBackgroundImageOriginal()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getBackgroundImageOriginal());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetSmallCoverImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getSmallCoverImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetMediumCoverImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getMediumCoverImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetLargeCoverImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getLargeCoverImage());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetState()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertInternalType('string', $movie->getState());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetTorrents()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertTrue($movie->getTorrents()->isNotEmpty());
        $this->assertInternalType('string', $movie->getTorrents()->first()->getUrl());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDateUploaded()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('string', $movie->getDateUploaded());
    }

    /**
     * @throws \Exception
     */
    public function testCanGetDateUploadedUnix()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInternalType('int', $movie->getDateUploadedUnix());
    }
}