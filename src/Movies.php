<?php

namespace pxgamer\YTS;

use Illuminate\Support\Collection;

/**
 * Class Movies
 */
class Movies
{
    /**
     * Retrieve a collection of Movie elements.
     * @param array $options
     * @return Collection
     * @throws \Exception
     */
    public static function list(array $options = [])
    {
        $options = array_merge([
            'quality' => 'All',
            'query_term' => 0,
            'page' => 1,
            'minimum_rating' => 0,
            'genre' => '',
            'sort_by' => 'date-added',
            'order_by' => 'desc',
            'with_rt_ratings' => false,
        ], $options);

        $response = YTS::getFromApi('/list_movies.json', $options);

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
    public static function buildCollection(array $data)
    {
        $collection = new Collection();

        foreach ($data as $datum) {
            $torrent = new Movie($datum);
            $collection->push($torrent);
        }

        return $collection;
    }
}