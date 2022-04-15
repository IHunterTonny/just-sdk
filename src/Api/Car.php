<?php

namespace Just\Api;

class Car extends AbstractApi
{
    public function result($parameters = [])
    {
        return $this->post('/car/result', $parameters);
    }
}