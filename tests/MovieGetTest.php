<?php

namespace pxgamer\YTS;

use Exception;
use PHPUnit\Framework\TestCase;

class MovieGetTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanGetId()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getId());
    }

    /**
     * @throws Exception
     */
    public function testCanGetUrl(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getUrl());
    }

    /**
     * @throws Exception
     */
    public function testCanGetImdbCode()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getImdbCode());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitle()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getTitle());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitleEnglish()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getTitleEnglish());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitleLong()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getTitleLong());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSlug()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getSlug());
    }

    /**
     * @throws Exception
     */
    public function testCanGetYear()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getYear());
    }

    /**
     * @throws Exception
     */
    public function testCanGetRating()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsFloat($movie->getRating());
    }

    /**
     * @throws Exception
     */
    public function testCanGetRuntime()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getRuntime());
    }

    /**
     * @throws Exception
     */
    public function testCanGetGenres()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertTrue($movie->getGenres()->isNotEmpty());
        $this->assertIsString($movie->getGenres()->first());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDownloadCount()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getDownloadCount());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLikeCount()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getLikeCount());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSummary()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getSummary());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDescriptionFull()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getDescriptionFull());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSynopsis()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getSynopsis());
    }

    /**
     * @throws Exception
     */
    public function testCanGetYtTrailerCode()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getYtTrailerCode());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLanguage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getLanguage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetMpaRating()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getMpaRating());
    }

    /**
     * @throws Exception
     */
    public function testCanGetBackgroundImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getBackgroundImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetBackgroundImageOriginal()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getBackgroundImageOriginal());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSmallCoverImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getSmallCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetMediumCoverImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getMediumCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLargeCoverImage()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getLargeCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetState()
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getState());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTorrents()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertTrue($movie->getTorrents()->isNotEmpty());
        $this->assertIsString($movie->getTorrents()->first()->getUrl());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploaded()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getDateUploaded());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploadedUnix()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getDateUploadedUnix());
    }
}
