<?php

declare(strict_types=1);

namespace Just\Tests;

use Http\Mock\Client;
use Just\HttpClient\Builder;
use Just\Options;
use Just\Sdk;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Client $mockClient;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mockClient = new Client();
    }

    protected function givenSdk(): Sdk
    {
        return new Sdk(
            'xxx-xxx',
            new Options([
            'clientBuilder' => new Builder($this->mockClient),
        ]));
    }
}