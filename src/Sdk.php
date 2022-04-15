<?php

namespace Just;

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Just\Api\ApiInterface;
use Just\HttpClient\Builder;

class Sdk
{
    private Builder $clientBuilder;
    private string $apiKey;

    public function __construct(string $apiKey, Options $options = null)
    {
        // Auth
        if (!$this->apiKey = $apiKey) {
            throw new \InvalidArgumentException('Required argument "api_key" has not been provided');
        }

        // Configure client
        $options = $options ?: new Options();
        $this->clientBuilder = $options->getClientBuilder();
        $this->clientBuilder->addPlugin(
            new BaseUriPlugin($options->getUri())
        );
        $this->clientBuilder->addPlugin(
            new HeaderDefaultsPlugin([
                'User-Agent' => 'php-just-api (https://github.com/IHunterTonny/php-just-api)',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
        );
    }

    public function getHttpClient(): HttpMethodsClientInterface
    {
        return $this->clientBuilder->getHttpClient();
    }

    public function api($name): ApiInterface
    {
        switch ($name) {
            case 'car':
                $api = new \Just\Api\Car($this);
                break;

            default:
                throw new \InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
        }

        return $api;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}