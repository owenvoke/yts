<?php

declare(strict_types=1);

namespace pxgamer\YTS\Entity;

use function is_array;

final class Movie extends AbstractEntity
{
    /** @var int */
    private $id;
    /** @var string */
    private $url;
    /** @var string */
    private $imdbCode;
    /** @var string */
    private $title;
    /** @var string */
    private $titleEnglish;
    /** @var string */
    private $titleLong;
    /** @var string */
    private $slug;
    /** @var int */
    private $year;
    /** @var float */
    private $rating;
    /** @var int */
    private $runtime;
    /** @var array */
    private $genres;
    /** @var int */
    private $downloadCount;
    /** @var int */
    private $likeCount;
    /** @var string */
    private $summary;
    /** @var string */
    private $descriptionFull;
    /** @var string */
    private $synopsis;
    /** @var string */
    private $ytTrailerCode;
    /** @var string */
    private $language;
    /** @var string */
    private $mpaRating;
    /** @var string */
    private $backgroundImage;
    /** @var string */
    private $backgroundImageOriginal;
    /** @var string */
    private $smallCoverImage;
    /** @var string */
    private $mediumCoverImage;
    /** @var string */
    private $largeCoverImage;
    /** @var string */
    private $state;
    /** @var array */
    private $torrents;
    /** @var string */
    private $dateUploaded;
    /** @var int */
    private $dateUploadedUnix;

    public function __construct(array $parameters = null)
    {
        if (!$parameters) {
            return;
        }

        if (isset($parameters['torrents']) && is_array($parameters['torrents'])) {
            foreach ($parameters['torrents'] as $torrent) {
                $this->torrents[] = new Torrent($torrent);
            }

            unset($parameters['torrents']);
        }

        parent::__construct($parameters);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getImdbCode(): string
    {
        return $this->imdbCode;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTitleEnglish(): string
    {
        return $this->titleEnglish;
    }

    public function getTitleLong(): string
    {
        return $this->titleLong;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function getRuntime(): int
    {
        return $this->runtime;
    }

    public function getGenres(): array
    {
        return $this->genres;
    }

    public function getDownloadCount(): int
    {
        return $this->downloadCount;
    }

    public function getLikeCount(): int
    {
        return $this->likeCount;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function getDescriptionFull(): string
    {
        return $this->descriptionFull;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function getYtTrailerCode(): string
    {
        return $this->ytTrailerCode;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getMpaRating(): string
    {
        return $this->mpaRating;
    }

    public function getBackgroundImage(): string
    {
        return $this->backgroundImage;
    }

    public function getBackgroundImageOriginal(): string
    {
        return $this->backgroundImageOriginal;
    }

    public function getSmallCoverImage(): string
    {
        return $this->smallCoverImage;
    }

    public function getMediumCoverImage(): string
    {
        return $this->mediumCoverImage;
    }

    public function getLargeCoverImage(): string
    {
        return $this->largeCoverImage;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getTorrents(): array
    {
        return $this->torrents;
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
