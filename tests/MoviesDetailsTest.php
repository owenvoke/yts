<?php

namespace pxgamer\YTS;

use PHPUnit\Framework\TestCase;

class MoviesDetailsTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testCanRetrieveMovie()
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInstanceOf(Movie::class, $movie);
    }

    /**
     * @throws \Exception
     */
    public function testCanRetrieveMovieWithImages()
    {
        $movie = Movies::details([
            'movie_id' => 10,
            'with_images' => true,
        ]);
        $this->assertInstanceOf(Movie::class, $movie);
    }

    /**
     * @throws \Exception
     */
    public function testCanRetrieveMovieWithCast()
    {
        $movie = Movies::details([
            'movie_id' => 10,
            'with_cast' => true,
        ]);
        $this->assertInstanceOf(Movie::class, $movie);
    }

    /**
     * @throws \Exception
     */
    public function testThrowsErrorOnInvalidData()
    {
        $this->expectException(\InvalidArgumentException::class);
        Movies::details();
    }
}
