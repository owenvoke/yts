<?php

namespace pxgamer\YTS;

use Exception;
use PHPUnit\Framework\TestCase;
use pxgamer\YTS\Exception\HttpException;

class MoviesSuggestionsTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanRetrieveMovie(): void
    {
        $movies = Movies::suggestions([
            'movie_id' => 10,
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws Exception
     */
    public function testCanRetrieveMovieWithImages(): void
    {
        $movies = Movies::suggestions([
            'movie_id'    => 10,
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws Exception
     */
    public function testCanRetrieveMovieWithCast(): void
    {
        $movies = Movies::suggestions([
            'movie_id'  => 10,
        ]);
        $this->assertTrue($movies->isNotEmpty());
        $this->assertTrue($movies->first()->getId() > 0);
    }

    /**
     * @throws Exception
     */
    public function testThrowsErrorOnInvalidData(): void
    {
        $this->expectException(HttpException::class);
        Movies::suggestions();
    }
}
