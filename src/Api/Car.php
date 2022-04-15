<?php

namespace Just\Api;

class Car extends AbstractApi
{
    public function result()
    {
        return $this->get('/car/result');
    }
}