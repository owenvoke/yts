<?php

namespace pxgamer\YTS;

use Exception;
use Illuminate\Support\Collection;

class Movies
{
    /** Constant for all qualities. */
    public const QUALITY_ALL = 'All';
    /** Constant for 720p quality. */
    public const QUALITY_720 = '720p';
    /** Constant for 1080p quality. */
    public const QUALITY_1080 = '1080p';
    /** Constant for 3D quality. */
    public const QUALITY_3D = '3D';

    /**
     * Retrieve a collection of Movie instances.
     * @param array $options
     * @return Collection
     * @throws Exception
     */
    public static function list(array $options = null): Collection
    {
        $options = $options ?? [];

        $options = array_merge([
            'quality' => self::QUALITY_ALL,
            'query_term' => 0,
            'page' => 1,
            'minimum_rating' => 0,
            'genre' => '',
            'sort_by' => 'date-added',
            'order_by' => 'desc',
            'with_rt_ratings' => false,
        ], $options);

        $response = YTS::getFromApi('list_movies.json', $options);

        return self::buildCollection($response['data']['movies']);
    }

    /**
     * Retrieve a Movie instance.
     * @param array $options
     * @return Movie
     * @throws Exception
     */
    public static function details(array $options = null): Movie
    {
        $options = $options ?? [];

        $options = array_merge([
            'movie_id' => null,
            'with_images' => false,
            'with_cast' => false,
        ], $options);

        $response = YTS::getFromApi('movie_details.json', $options);

        return new Movie($response['data']['movie']);
    }

    /**
     * Retrieve a Collection of suggested Movie instances.
     * @param array $options
     * @return Collection
     * @throws Exception
     */
    public static function suggestions(array $options = null): Collection
    {
        $options = $options ?? [];

        $options = array_merge([
            'movie_id' => null,
        ], $options);

        $response = YTS::getFromApi('movie_suggestions.json', $options);

        if (isset($response['data']['movies'])) {
            return self::buildCollection($response['data']['movies']);
        }

        throw new Exceptions\NoDataFoundException();
    }

    /**
     * Build a Collection of Movie classes from an array.
     * @param array $data
     * @return Collection
     */
    public static function buildCollection(array $data): Collection
    {
        $collection = new Collection();

        foreach ($data as $datum) {
            $torrent = new Movie($datum);
            $collection->push($torrent);
        }

        return $collection;
    }
}
