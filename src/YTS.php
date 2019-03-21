<?php

declare(strict_types=1);

namespace pxgamer\YTS;

use pxgamer\YTS\Adapter\HttpAdapter;
use pxgamer\YTS\Api\Movies;

final class YTS
{
    /** @var HttpAdapter */
    protected $adapter;

    public function __construct(HttpAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function movies(): Movies
    {
        return new Movies($this->adapter);
    }
}
