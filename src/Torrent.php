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
     * Torrent constructor.
     * @param array $prefill
     */
    public function __construct(array $prefill = [])
    {
        foreach ($prefill as $item => $value) {
            if (property_exists(Torrent::class, $item)) {
                $this->$item = $value;
            }
        }
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @return string
     */
    public function getQuality(): string
    {
        return $this->quality;
    }

    /**
     * @param string $quality
     */
    public function setQuality(string $quality): void
    {
        $this->quality = $quality;
    }

    /**
     * @return int
     */
    public function getSeeds(): int
    {
        return $this->seeds;
    }

    /**
     * @param int $seeds
     */
    public function setSeeds(int $seeds): void
    {
        $this->seeds = $seeds;
    }

    /**
     * @return int
     */
    public function getPeers(): int
    {
        return $this->peers;
    }

    /**
     * @param int $peers
     */
    public function setPeers(int $peers): void
    {
        $this->peers = $peers;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSizeBytes(): int
    {
        return $this->size_bytes;
    }

    /**
     * @param int $size_bytes
     */
    public function setSizeBytes(int $size_bytes): void
    {
        $this->size_bytes = $size_bytes;
    }

    /**
     * @return string
     */
    public function getDateUploaded(): string
    {
        return $this->date_uploaded;
    }

    /**
     * @param string $date_uploaded
     */
    public function setDateUploaded(string $date_uploaded): void
    {
        $this->date_uploaded = $date_uploaded;
    }

    /**
     * @return int
     */
    public function getDateUploadedUnix(): int
    {
        return $this->date_uploaded_unix;
    }

    /**
     * @param int $date_uploaded_unix
     */
    public function setDateUploadedUnix(int $date_uploaded_unix): void
    {
        $this->date_uploaded_unix = $date_uploaded_unix;
    }
}
