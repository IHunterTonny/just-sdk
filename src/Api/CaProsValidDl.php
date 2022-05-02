<?php

namespace Just\Api;

class CaProsValidDl extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ca-pros-valid-dl/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ca-pros-valid-dl/add-order', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/ca-pros-valid-dl/get-task', $parameters);
    }

    public function getAvailableParams($parameters = [])
    {
        return $this->post('/ca-pros-valid-dl/get-available-params', $parameters);
    }
}