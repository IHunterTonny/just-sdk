<?php

namespace Just\Api;

class Car extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/car/result', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/car/create', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/car/price', $parameters);
    }
}