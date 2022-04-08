<?php

namespace Just;

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Just\Api\ApiInterface;
use Just\HttpClient\Builder;

/**
 * Example:
 *      $options = new Options([
            'uri' => 'http://0.0.0.0:8086/api',
        ]);
 *      (new \Just\Sdk($options))->api('car')->result();
 */
class Sdk
{
    private Builder $clientBuilder;

    public function __construct(Options $options)
    {
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
}