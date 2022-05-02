<?php

namespace Just\Api;

class BackgroundReport extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/background-report/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/background-report/add-order', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/background-report/get-order', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/background-report/price', $parameters);
    }
}