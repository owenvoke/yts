<?php

declare(strict_types=1);

namespace pxgamer\YTS\Entity;

final class Torrent extends AbstractEntity
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
    protected $sizeBytes;
    /** @var string */
    protected $dateUploaded;
    /** @var int */
    protected $dateUploadedUnix;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getQuality(): string
    {
        return $this->quality;
    }

    public function getSeeds(): int
    {
        return $this->seeds;
    }

    public function getPeers(): int
    {
        return $this->peers;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getSizeBytes(): int
    {
        return $this->sizeBytes;
    }

    public function getDateUploaded(): string
    {
        return $this->dateUploaded;
    }

    public function getDateUploadedUnix(): int
    {
        return $this->dateUploadedUnix;
    }
}
