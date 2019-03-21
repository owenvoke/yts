<?php

declare(strict_types=1);

namespace pxgamer\YTS;

use pxgamer\YTS\Adapter\HttpAdapter;
use pxgamer\YTS\Api\Movie;

final class YTS
{
    /** @var HttpAdapter */
    protected $adapter;

    public function __construct(HttpAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function movie(): Movie
    {
        return new Movie($this->adapter);
    }
}
