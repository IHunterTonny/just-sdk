<?php

namespace Just\Api;

class Banner extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/banner/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/banner/create', $parameters);
    }
}