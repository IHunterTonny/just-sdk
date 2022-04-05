<?php

namespace Just\Api;

use Just\HttpClient\ResponseMediator;
use Just\Sdk;

abstract class AbstractApi implements ApiInterface
{
    protected Sdk $sdk;

    public function __construct(Sdk $sdk)
    {
        $this->sdk = $sdk;
    }

    protected function get($uri, array $headers = [])
    {
        return ResponseMediator::getContent(
            $this->sdk->getHttpClient()->get($uri, $headers)
        );
    }
}