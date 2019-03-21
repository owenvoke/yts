<?php

declare(strict_types=1);

namespace pxgamer\YTS\Api;

use pxgamer\YTS\Adapter\HttpAdapter;

abstract class AbstractApi
{
    /** @var string */
    public const ENDPOINT = 'https://yts.am/api/v2/';
    /** @var HttpAdapter */
    protected $adapter;
    /** @var string */
    protected $endpoint;

    public function __construct(HttpAdapter $adapter, ?string $endpoint = null)
    {
        $this->adapter = $adapter;
        $this->endpoint = $endpoint ?: static::ENDPOINT;
    }
}
