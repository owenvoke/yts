<?php

namespace pxgamer\YTS;

use Exception;
use PHPUnit\Framework\TestCase;
use pxgamer\YTS\Exceptions\NoDataFoundException;

class MoviesSuggestionsTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanRetrieveMovie()
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
    public function testCanRetrieveMovieWithImages()
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
    public function testCanRetrieveMovieWithCast()
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
    public function testThrowsErrorOnInvalidData()
    {
        $this->expectException(NoDataFoundException::class);
        Movies::suggestions();
    }
}
