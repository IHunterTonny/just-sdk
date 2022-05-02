<?php

namespace Just\Api;

class Ssn extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ssn/last-searches', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ssn/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/ssn/result', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/ssn/price', $parameters);
    }

    public function buy($parameters = [])
    {
        return $this->post('/ssn/buy', $parameters);
    }
}