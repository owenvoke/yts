<?php

namespace pxgamer\YTS;

use pxgamer\YTS\Adapter\HttpAdapter;

class YTS
{
    /** @var HttpAdapter */
    protected $adapter;

    public function __construct(HttpAdapter $adapter)
    {
        $this->adapter = $adapter;
    }
}
