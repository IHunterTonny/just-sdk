<?php

namespace Just;

use Just\HttpClient\Builder;
use Psr\Http\Message\UriFactoryInterface;
use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Message\UriInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Options
{
    private array $options;

    public function __construct(array $options = [])
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $this->options = $resolver->resolve($options);
    }

    private function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'client_builder' => new Builder(),
            'uri_factory' => Psr17FactoryDiscovery::findUriFactory(),
            'uri' => 'https://just-kill.cc/api',
            'apiVersion' => 'v2',
        ]);
        $resolver->setAllowedTypes('client_builder', Builder::class);
        $resolver->setAllowedTypes('uri_factory', UriFactoryInterface::class);
        $resolver->setAllowedTypes('uri', 'string');
        $resolver->setAllowedTypes('apiVersion', 'string');
    }


    public function getClientBuilder(): Builder
    {
        return $this->options['clientBuilder'];
    }

    public function getUriFactory(): UriFactoryInterface
    {
        return $this->options['uriFactory'];
    }

    public function getUri(): UriInterface
    {
        return $this->getUriFactory()->createUri(
            rtrim($this->options['uri'], '/') . sprintf('/%s', $this->getApiVersion())
        );
    }

    public function getApiVersion(): string
    {
        return $this->options['apiVersion'];
    }
}