<?php

namespace Just\Api;

use Psr\Http\Message\ResponseInterface;

class Car extends AbstractApi
{
    public function result(): ResponseInterface
    {
        return $this->get('/car/result');
    }
}