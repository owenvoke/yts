<?php

declare(strict_types=1);

namespace pxgamer\YTS\Entity;

use function is_array;

final class Movie extends AbstractEntity
{
    /** @var int */
    protected $id;
    /** @var string */
    protected $url;
    /** @var string */
    protected $imdbCode;
    /** @var string */
    protected $title;
    /** @var string */
    protected $titleEnglish;
    /** @var string */
    protected $titleLong;
    /** @var string */
    protected $slug;
    /** @var int */
    protected $year;
    /** @var float */
    protected $rating;
    /** @var int */
    protected $runtime;
    /** @var array */
    protected $genres;
    /** @var int */
    protected $downloadCount;
    /** @var int */
    protected $likeCount;
    /** @var string */
    protected $summary;
    /** @var string */
    protected $descriptionFull;
    /** @var string */
    protected $synopsis;
    /** @var string */
    protected $ytTrailerCode;
    /** @var string */
    protected $language;
    /** @var string */
    protected $mpaRating;
    /** @var string */
    protected $backgroundImage;
    /** @var string */
    protected $backgroundImageOriginal;
    /** @var string */
    protected $smallCoverImage;
    /** @var string */
    protected $mediumCoverImage;
    /** @var string */
    protected $largeCoverImage;
    /** @var string */
    protected $state;
    /** @var array */
    protected $torrents;
    /** @var string */
    protected $dateUploaded;
    /** @var int */
    protected $dateUploadedUnix;

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
