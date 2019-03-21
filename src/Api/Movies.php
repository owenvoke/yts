<?php

declare(strict_types=1);

namespace pxgamer\YTS\Api;

use Exception;
use pxgamer\YTS\Entity\Movie;

final class Movies extends AbstractApi
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
     * Retrieve an array of Movie instances.
     * @param array $options
     * @return array
     * @throws Exception
     */
    public function list(array $options = null): array
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

        $response = $this->adapter->get('list_movies.json?'.http_build_query($options));

        $movieData = json_decode($response);

        return array_map(function ($action) {
            return new Movie($action);
        }, $movieData['data']['movies']);
    }

    /**
     * Retrieve a Movie instance.
     * @param array $options
     * @return Movie
     * @throws Exception
     */
    public function details(array $options = null): Movie
    {
        $options = $options ?? [];

        $options = array_merge([
            'movie_id' => null,
            'with_images' => false,
            'with_cast' => false,
        ], $options);

        $response = $this->adapter->get('movie_details.json?'.http_build_query($options));

        $movieData = json_decode($response);

        return new Movie($movieData['data']['movie']);
    }

    /**
     * Retrieve an array of suggested Movie instances.
     * @param array $options
     * @return array
     * @throws Exception
     */
    public function suggestions(array $options = null): array
    {
        $options = $options ?? [];

        $options = array_merge([
            'movie_id' => null,
        ], $options);

        $response = $this->adapter->get('movie_suggestions.json?'.http_build_query($options));

        $movieData = json_decode($response);

        return array_map(function ($action) {
            return new Movie($action);
        }, $movieData['data']['movies']);
    }
}
