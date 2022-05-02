<?php

namespace Just\Api;

class CcChecker extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/cc-checker/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/cc-checker/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/cc-checker/get-order', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/cc-checker/price', $parameters);
    }
}