<?php

namespace pxgamer\YTS;

use GuzzleHttp\Client;

/**
 * Class YTS
 */
class YTS
{
    /**
     * The current version of the API.
     */
    const API_VERSION = 2;
    /**
     * The base uri of the API.
     */
    const BASE_URI = 'https://yts.ag/api/v'.YTS::API_VERSION.'/';

    /**
     * @var Client
     */
    private static $client;

    /**
     * Retrieve the array response from the API endpoint.
     * @param string $endpoint
     * @param array  $parameters
     * @return array|null
     */
    public static function getFromApi($endpoint, $parameters = [])
    {
        $response = YTS::getClient()
                       ->get($endpoint, ['query' => $parameters]);

        return \GuzzleHttp\json_decode(
            $response->getBody()
                     ->getContents(),
            true
        );
    }

    /**
     * Retrieve the current GuzzleHttp Client instance.
     * @return Client
     */
    private static function getClient()
    {
        if (!YTS::$client instanceof Client) {
            YTS::$client = new Client([
                'base_uri' => YTS::BASE_URI,
            ]);
        }

        return YTS::$client;
    }
}
