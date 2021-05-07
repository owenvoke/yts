<?php

namespace OwenVoke\YTS;

use Exception;
use PHPUnit\Framework\TestCase;

class MovieGetTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanGetId(): void
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
    public function testCanGetImdbCode(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getImdbCode());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitle(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getTitle());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitleEnglish(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getTitleEnglish());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTitleLong(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getTitleLong());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSlug(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getSlug());
    }

    /**
     * @throws Exception
     */
    public function testCanGetYear(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getYear());
    }

    /**
     * @throws Exception
     */
    public function testCanGetRating(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsFloat($movie->getRating());
    }

    /**
     * @throws Exception
     */
    public function testCanGetRuntime(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getRuntime());
    }

    /**
     * @throws Exception
     */
    public function testCanGetGenres(): void
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
    public function testCanGetDownloadCount(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getDownloadCount());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLikeCount(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getLikeCount());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSummary(): void
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getSummary());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDescriptionFull(): void
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getDescriptionFull());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSynopsis(): void
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getSynopsis());
    }

    /**
     * @throws Exception
     */
    public function testCanGetYtTrailerCode(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getYtTrailerCode());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLanguage(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getLanguage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetMpaRating(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getMpaRating());
    }

    /**
     * @throws Exception
     */
    public function testCanGetBackgroundImage(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getBackgroundImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetBackgroundImageOriginal(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getBackgroundImageOriginal());
    }

    /**
     * @throws Exception
     */
    public function testCanGetSmallCoverImage(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getSmallCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetMediumCoverImage(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getMediumCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetLargeCoverImage(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getLargeCoverImage());
    }

    /**
     * @throws Exception
     */
    public function testCanGetState(): void
    {
        $movie = Movies::list([
            'movie_id' => 10,
        ])->first();
        $this->assertIsString($movie->getState());
    }

    /**
     * @throws Exception
     */
    public function testCanGetTorrents(): void
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
    public function testCanGetDateUploaded(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsString($movie->getDateUploaded());
    }

    /**
     * @throws Exception
     */
    public function testCanGetDateUploadedUnix(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertIsInt($movie->getDateUploadedUnix());
    }
}
