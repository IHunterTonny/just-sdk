<?php

namespace Just\Api;

class Postage extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/postage/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/postage/create', $parameters);
    }

    public function download($parameters = [])
    {
        return $this->post('/postage/download', $parameters);
    }
}