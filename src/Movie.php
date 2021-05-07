<?php

namespace OwenVoke\YTS;

use Illuminate\Support\Collection;

class Movie
{
    /** @var int */
    protected $id;
    /** @var string */
    protected $url;
    /** @var string */
    protected $imdb_code;
    /** @var string */
    protected $title;
    /** @var string */
    protected $title_english;
    /** @var string */
    protected $title_long;
    /** @var string */
    protected $slug;
    /** @var int */
    protected $year;
    /** @var float */
    protected $rating;
    /** @var int */
    protected $runtime;
    /** @var Collection */
    protected $genres;
    /** @var int */
    protected $download_count;
    /** @var int */
    protected $like_count;
    /** @var string */
    protected $summary;
    /** @var string */
    protected $description_full;
    /** @var string */
    protected $synopsis;
    /** @var string */
    protected $yt_trailer_code;
    /** @var string */
    protected $language;
    /** @var string */
    protected $mpa_rating;
    /** @var string */
    protected $background_image;
    /** @var string */
    protected $background_image_original;
    /** @var string */
    protected $small_cover_image;
    /** @var string */
    protected $medium_cover_image;
    /** @var string */
    protected $large_cover_image;
    /** @var string */
    protected $state;
    /** @var Collection */
    protected $torrents;
    /** @var string */
    protected $date_uploaded;
    /** @var int */
    protected $date_uploaded_unix;

    public function __construct(array $prefill = null)
    {
        $prefill = $prefill ?? [];

        foreach ($prefill as $item => $value) {
            if (property_exists(self::class, $item)) {
                switch ($item) {
                    case 'torrents':
                        $this->torrents = Torrents::buildCollection($value);
                        break;
                    case 'genres':
                        $this->genres = collect($value);
                        break;
                    default:
                        $this->$item = $value;
                }
            }
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getImdbCode(): string
    {
        return $this->imdb_code;
    }

    public function setImdbCode(string $imdb_code): void
    {
        $this->imdb_code = $imdb_code;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitleEnglish(): string
    {
        return $this->title_english;
    }

    public function setTitleEnglish(string $title_english): void
    {
        $this->title_english = $title_english;
    }

    public function getTitleLong(): string
    {
        return $this->title_long;
    }

    public function setTitleLong(string $title_long): void
    {
        $this->title_long = $title_long;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    public function getRuntime(): int
    {
        return $this->runtime;
    }

    public function setRuntime(int $runtime): void
    {
        $this->runtime = $runtime;
    }

    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function setGenres(Collection $genres): void
    {
        $this->genres = $genres;
    }

    public function getDownloadCount(): int
    {
        return $this->download_count;
    }

    public function setDownloadCount($download_count): void
    {
        $this->download_count = $download_count;
    }

    public function getLikeCount(): int
    {
        return $this->like_count;
    }

    public function setLikeCount($like_count): void
    {
        $this->like_count = $like_count;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setSummary(string $summary): void
    {
        $this->summary = $summary;
    }

    public function getDescriptionFull(): string
    {
        return $this->description_full;
    }

    public function setDescriptionFull(string $description_full): void
    {
        $this->description_full = $description_full;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): void
    {
        $this->synopsis = $synopsis;
    }

    public function getYtTrailerCode(): string
    {
        return $this->yt_trailer_code;
    }

    public function setYtTrailerCode(string $yt_trailer_code): void
    {
        $this->yt_trailer_code = $yt_trailer_code;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getMpaRating(): string
    {
        return $this->mpa_rating;
    }

    public function setMpaRating(string $mpa_rating): void
    {
        $this->mpa_rating = $mpa_rating;
    }

    public function getBackgroundImage(): string
    {
        return $this->background_image;
    }

    public function setBackgroundImage(string $background_image): void
    {
        $this->background_image = $background_image;
    }

    public function getBackgroundImageOriginal(): string
    {
        return $this->background_image_original;
    }

    public function setBackgroundImageOriginal(string $background_image_original): void
    {
        $this->background_image_original = $background_image_original;
    }

    public function getSmallCoverImage(): string
    {
        return $this->small_cover_image;
    }

    public function setSmallCoverImage(string $small_cover_image): void
    {
        $this->small_cover_image = $small_cover_image;
    }

    public function getMediumCoverImage(): string
    {
        return $this->medium_cover_image;
    }

    public function setMediumCoverImage(string $medium_cover_image): void
    {
        $this->medium_cover_image = $medium_cover_image;
    }

    public function getLargeCoverImage(): string
    {
        return $this->large_cover_image;
    }

    public function setLargeCoverImage(string $large_cover_image): void
    {
        $this->large_cover_image = $large_cover_image;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getTorrents(): Collection
    {
        return $this->torrents;
    }

    public function setTorrents(Collection $torrents): void
    {
        $this->torrents = $torrents;
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
