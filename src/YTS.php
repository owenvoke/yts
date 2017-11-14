<?php

namespace pxgamer\YTS;

use GuzzleHttp\Client;

/**
 * Class YTS
 */
class YTS
{
    const API_VERSION = 2;
    const BASE_URI = 'https://yts.ag/api/v'.YTS::API_VERSION;

    /**
     * @var Client
     */
    private static $client;

    /**
     * @param string $endpoint
     * @return array|null
     * @throws \Exception
     */
    public static function getFromApi($endpoint)
    {
        $response = YTS::getClient()
                       ->get($endpoint);

        return \GuzzleHttp\json_decode(
            $response->getBody()
                     ->getContents(),
            true
        );
    }

    /**
     * Retrieve the current GuzzleHttp Client instance.
     *
     * @return Client
     */
    public static function getClient()
    {
        if (!YTS::$client instanceof Client) {
            YTS::$client = new Client([
                'base_uri' => YTS::BASE_URI,
            ]);
        }

        return YTS::$client;
    }
}
