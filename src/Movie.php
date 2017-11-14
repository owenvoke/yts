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
}