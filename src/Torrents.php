<?php

namespace pxgamer\YTS;

use Illuminate\Support\Collection;

/**
 * Class Torrents
 */
class Torrents
{
    /**
     * Build a Collection of Torrent classes from an array.
     * @param array $data
     * @return Collection
     */
    public static function buildCollection(array $data)
    {
        $collection = new Collection();

        foreach ($data as $datum) {
            $torrent = new Torrent($datum);
            $collection->push($torrent);
        }

        return $collection;
    }
}
