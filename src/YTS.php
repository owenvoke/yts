<?php

namespace pxgamer\YTS;

use GuzzleHttp\Client;

class YTS
{
    /** The current version of the API. */
    public const API_VERSION = 2;
    /** The base uri of the API. */
    public const BASE_URI = 'https://yts.am/api/v'.self::API_VERSION.'/';

    /** @var Client */
    private static $client;

    /* Retrieve the array response from the API endpoint. */
    public static function getFromApi(string $endpoint, array $parameters = null): ?array
    {
        $parameters = $parameters ?? [];

        $response = self::getClient()
            ->get($endpoint, ['query' => $parameters]);

        return \GuzzleHttp\json_decode(
            $response->getBody()
                ->getContents(),
            true
        );
    }

    /* Retrieve the current GuzzleHttp Client instance. */
    private static function getClient(): Client
    {
        if (!self::$client instanceof Client) {
            self::$client = new Client([
                'base_uri' => self::BASE_URI,
            ]);
        }

        return self::$client;
    }
}
