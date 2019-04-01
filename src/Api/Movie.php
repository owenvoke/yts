<?php

declare(strict_types=1);

namespace pxgamer\YTS\Api;

use pxgamer\YTS\Entity\Movie as MovieEntity;

final class Movie extends AbstractApi
{
    /** Constant for all qualities. */
    public const QUALITY_ALL = 'All';
    /** Constant for 720p quality. */
    public const QUALITY_720 = '720p';
    /** Constant for 1080p quality. */
    public const QUALITY_1080 = '1080p';
    /** Constant for 3D quality. */
    public const QUALITY_3D = '3D';

    public function getAll(array $options = null): array
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

        $response = $this->adapter->get(
            sprintf('%s/list_movies.json?%s', $this->endpoint, http_build_query($options))
        );

        $movieData = json_decode($response);

        return array_map(static function ($action) {
            return new MovieEntity($action);
        }, $movieData['data']['movies']);
    }

    public function getMovieInformation(int $movieId, array $options = null): MovieEntity
    {
        $options = $options ?? [];

        $options = array_merge([
            'with_images' => false,
            'with_cast' => false,
        ], $options);

        $options['movie_id'] = $movieId;

        $response = $this->adapter->get(
            sprintf('%s/movie_details.json?%s', $this->endpoint, http_build_query($options))
        );

        $movieData = json_decode($response);

        return new MovieEntity($movieData['data']['movie']);
    }

    public function getMovieSuggestions(int $movieId): array
    {
        $response = $this->adapter->get(
            sprintf('%s/movie_suggestions.json?movie_id=%s', $this->endpoint, $movieId)
        );

        $movieData = json_decode($response);

        return array_map(static function ($action) {
            return new MovieEntity($action);
        }, $movieData['data']['movies']);
    }
}
