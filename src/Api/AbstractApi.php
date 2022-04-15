<?php

namespace Just\Api;

use Just\HttpClient\ResponseFormatter;
use Just\Sdk;

abstract class AbstractApi implements ApiInterface
{
    protected Sdk $sdk;
    protected ResponseFormatter $responseFormatter;

    public function __construct(Sdk $sdk, ResponseFormatter $responseFormatter = null)
    {
        $this->sdk = $sdk;
        $this->responseFormatter = $responseFormatter ?: new ResponseFormatter();
    }

    protected function post($uri, array $parameters = [], array $headers = [])
    {
        // Add apiKey
        $parameters = array_merge($parameters, [
            'api_key' => $this->sdk->getApiKey(),
        ]);

        return $this->responseFormatter::getContent(
            $this->sdk->getHttpClient()->post(
                $uri,
                $headers,
                $this->createJsonBody($parameters)
            )
        );
    }

    protected function createJsonBody(array $parameters)
    {
        return (count($parameters) === 0) ? null : json_encode($parameters, empty($parameters) ? JSON_FORCE_OBJECT : 0);
    }
}