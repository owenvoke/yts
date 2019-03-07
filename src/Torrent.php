<?php

namespace pxgamer\YTS;

class Torrent
{
    /** @var string */
    protected $url;
    /** @var string */
    protected $hash;
    /** @var string */
    protected $quality;
    /** @var int */
    protected $seeds;
    /** @var int */
    protected $peers;
    /** @var string */
    protected $size;
    /** @var int */
    protected $size_bytes;
    /** @var string */
    protected $date_uploaded;
    /** @var int */
    protected $date_uploaded_unix;

    public function __construct(array $prefill = [])
    {
        foreach ($prefill as $item => $value) {
            if (property_exists(self::class, $item)) {
                $this->$item = $value;
            }
        }
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    public function getQuality(): string
    {
        return $this->quality;
    }

    public function setQuality(string $quality): void
    {
        $this->quality = $quality;
    }

    public function getSeeds(): int
    {
        return $this->seeds;
    }

    public function setSeeds(int $seeds): void
    {
        $this->seeds = $seeds;
    }

    public function getPeers(): int
    {
        return $this->peers;
    }

    public function setPeers(int $peers): void
    {
        $this->peers = $peers;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function getSizeBytes(): int
    {
        return $this->size_bytes;
    }

    public function setSizeBytes(int $size_bytes): void
    {
        $this->size_bytes = $size_bytes;
    }

    public function getDateUploaded(): string
    {
        return $this->date_uploaded;
    }

    public function setDateUploaded(string $date_uploaded): void
    {
        $this->date_uploaded = $date_uploaded;
    }

    public function getDateUploadedUnix(): int
    {
        return $this->date_uploaded_unix;
    }

    public function setDateUploadedUnix(int $date_uploaded_unix): void
    {
        $this->date_uploaded_unix = $date_uploaded_unix;
    }
}
