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

    protected function get($uri, array $headers = [])
    {
        return $this->responseFormatter::getContent(
            $this->sdk->getHttpClient()->get($uri, $headers)
        );
    }
}