<?php

namespace pxgamer\YTS;

use Illuminate\Support\Collection;

/**
 * Class Movie
 */
class Movie
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $imdb_code;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $title_english;
    /**
     * @var string
     */
    protected $title_long;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var int
     */
    protected $year;
    /**
     * @var float
     */
    protected $rating;
    /**
     * @var int
     */
    protected $runtime;
    /**
     * @var Collection
     */
    protected $genres;
    /**
     * @var string
     */
    protected $summary;
    /**
     * @var string
     */
    protected $description_full;
    /**
     * @var string
     */
    protected $synopsis;
    /**
     * @var string
     */
    protected $yt_trailer_code;
    /**
     * @var string
     */
    protected $language;
    /**
     * @var string
     */
    protected $mpa_rating;
    /**
     * @var string
     */
    protected $background_image;
    /**
     * @var string
     */
    protected $background_image_original;
    /**
     * @var string
     */
    protected $small_cover_image;
    /**
     * @var string
     */
    protected $medium_cover_image;
    /**
     * @var string
     */
    protected $large_cover_image;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var Collection
     */
    protected $torrents;
    /**
     * @var string
     */
    protected $date_uploaded;
    /**
     * @var int
     */
    protected $date_uploaded_unix;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
    public function getImdbCode(): string
    {
        return $this->imdb_code;
    }

    /**
     * @param string $imdb_code
     */
    public function setImdbCode(string $imdb_code): void
    {
        $this->imdb_code = $imdb_code;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitleEnglish(): string
    {
        return $this->title_english;
    }

    /**
     * @param string $title_english
     */
    public function setTitleEnglish(string $title_english): void
    {
        $this->title_english = $title_english;
    }

    /**
     * @return string
     */
    public function getTitleLong(): string
    {
        return $this->title_long;
    }

    /**
     * @param string $title_long
     */
    public function setTitleLong(string $title_long): void
    {
        $this->title_long = $title_long;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return float
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    /**
     * @param float $rating
     */
    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getRuntime(): int
    {
        return $this->runtime;
    }

    /**
     * @param int $runtime
     */
    public function setRuntime(int $runtime): void
    {
        $this->runtime = $runtime;
    }

    /**
     * @return Collection
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    /**
     * @param Collection $genres
     */
    public function setGenres(Collection $genres): void
    {
        $this->genres = $genres;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    /**
     * @return string
     */
    public function getDescriptionFull(): string
    {
        return $this->description_full;
    }

    /**
     * @param string $description_full
     */
    public function setDescriptionFull(string $description_full): void
    {
        $this->description_full = $description_full;
    }

    /**
     * @return string
     */
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    /**
     * @param string $synopsis
     */
    public function setSynopsis(string $synopsis): void
    {
        $this->synopsis = $synopsis;
    }

    /**
     * @return string
     */
    public function getYtTrailerCode(): string
    {
        return $this->yt_trailer_code;
    }

    /**
     * @param string $yt_trailer_code
     */
    public function setYtTrailerCode(string $yt_trailer_code): void
    {
        $this->yt_trailer_code = $yt_trailer_code;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getMpaRating(): string
    {
        return $this->mpa_rating;
    }

    /**
     * @param string $mpa_rating
     */
    public function setMpaRating(string $mpa_rating): void
    {
        $this->mpa_rating = $mpa_rating;
    }

    /**
     * @return string
     */
    public function getBackgroundImage(): string
    {
        return $this->background_image;
    }

    /**
     * @param string $background_image
     */
    public function setBackgroundImage(string $background_image): void
    {
        $this->background_image = $background_image;
    }

    /**
     * @return string
     */
    public function getBackgroundImageOriginal(): string
    {
        return $this->background_image_original;
    }

    /**
     * @param string $background_image_original
     */
    public function setBackgroundImageOriginal(string $background_image_original): void
    {
        $this->background_image_original = $background_image_original;
    }

    /**
     * @return string
     */
    public function getSmallCoverImage(): string
    {
        return $this->small_cover_image;
    }

    /**
     * @param string $small_cover_image
     */
    public function setSmallCoverImage(string $small_cover_image): void
    {
        $this->small_cover_image = $small_cover_image;
    }

    /**
     * @return string
     */
    public function getMediumCoverImage(): string
    {
        return $this->medium_cover_image;
    }

    /**
     * @param string $medium_cover_image
     */
    public function setMediumCoverImage(string $medium_cover_image): void
    {
        $this->medium_cover_image = $medium_cover_image;
    }

    /**
     * @return string
     */
    public function getLargeCoverImage(): string
    {
        return $this->large_cover_image;
    }

    /**
     * @param string $large_cover_image
     */
    public function setLargeCoverImage(string $large_cover_image): void
    {
        $this->large_cover_image = $large_cover_image;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return Collection
     */
    public function getTorrents(): Collection
    {
        return $this->torrents;
    }

    /**
     * @param Collection $torrents
     */
    public function setTorrents(Collection $torrents): void
    {
        $this->torrents = $torrents;
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
