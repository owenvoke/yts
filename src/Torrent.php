<?php

namespace pxgamer\YTS;

/**
 * Class Torrent
 */
class Torrent
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $hash;
    /**
     * @var string
     */
    protected $quality;
    /**
     * @var int
     */
    protected $seeds;
    /**
     * @var int
     */
    protected $peers;
    /**
     * @var string
     */
    protected $size;
    /**
     * @var int
     */
    protected $size_bytes;
    /**
     * @var string
     */
    protected $date_uploaded;
    /**
     * @var int
     */
    protected $date_uploaded_unix;

    /**
     * @param string $name
     * @return string|int|null
     */
    public function __get($name)
    {
        if (property_exists(Movie::class, $name)) {
            return $name;
        }

        return null;
    }
}
