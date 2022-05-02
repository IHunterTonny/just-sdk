<?php

namespace Just\Api;

class RandomSsn extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/random-ssn/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/random-ssn/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/random-ssn/get-task', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/random-ssn/price', $parameters);
    }
}