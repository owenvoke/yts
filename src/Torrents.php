<?php

namespace OwenVoke\YTS;

use Illuminate\Support\Collection;

class Torrents
{
    /* Build a Collection of Torrent classes from an array. */
    public static function buildCollection(array $data): Collection
    {
        $collection = new Collection();

        foreach ($data as $datum) {
            $torrent = new Torrent($datum);
            $collection->push($torrent);
        }

        return $collection;
    }
}
