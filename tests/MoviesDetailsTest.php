<?php

namespace OwenVoke\YTS;

use Exception;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class MoviesDetailsTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanRetrieveMovie(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
        ]);
        $this->assertInstanceOf(Movie::class, $movie);
    }

    /**
     * @throws Exception
     */
    public function testCanRetrieveMovieWithImages(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
            'with_images' => true,
        ]);
        $this->assertInstanceOf(Movie::class, $movie);
    }

    /**
     * @throws Exception
     */
    public function testCanRetrieveMovieWithCast(): void
    {
        $movie = Movies::details([
            'movie_id' => 10,
            'with_cast' => true,
        ]);
        $this->assertInstanceOf(Movie::class, $movie);
    }

    /**
     * @throws Exception
     */
    public function testThrowsErrorOnInvalidData(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Movies::details();
    }
}
