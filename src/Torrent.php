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
}