<?php

declare(strict_types=1);

namespace pxgamer\YTS\Entity;

final class Torrent extends AbstractEntity
{
    /** @var string */
    private $url;
    /** @var string */
    private $hash;
    /** @var string */
    private $quality;
    /** @var int */
    private $seeds;
    /** @var int */
    private $peers;
    /** @var string */
    private $size;
    /** @var int */
    private $sizeBytes;
    /** @var string */
    private $dateUploaded;
    /** @var int */
    private $dateUploadedUnix;

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
