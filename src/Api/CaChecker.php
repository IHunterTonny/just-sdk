<?php

namespace Just\Api;

class CaChecker extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ca-checker/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ca-checker/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/ca-checker/get-task', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/ca-checker/price', $parameters);
    }
}