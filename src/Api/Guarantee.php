<?php

namespace Just\Api;

class Guarantee extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/guarantee/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/guarantee/create', $parameters);
    }
}