<?php

namespace Just;

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Message\UriFactory;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Just\Api\ApiInterface;
use Just\HttpClient\Builder;

# $sdk = new \Just\Sdk();
# $sdk->api('car')->result();
# $sdk->car()->result();

final class Sdk
{
    private Builder $clientBuilder;

    public function __construct(Builder $clientBuilder = null, UriFactory $uriFactory = null)
    {
        $this->clientBuilder = $clientBuilder ?: new Builder();

        // Add default uri
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $this->clientBuilder->addPlugin(
            new BaseUriPlugin($uriFactory->createUri('http://0.0.0.0:8086/api/v2'))
        );

        // Add default headers
        $this->clientBuilder->addPlugin(
            new HeaderDefaultsPlugin([
                'User-Agent' => 'My Custom SDK',
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

    public function __call($name, $args)
    {
        try {
            return $this->api($name);
        } catch (\InvalidArgumentException $e) {
            throw new \BadMethodCallException(sprintf('Undefined method called: "%s"', $name));
        }
    }
}