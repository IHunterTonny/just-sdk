<?php

namespace Just\Api;

class CaProsDlNotChecked extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ca-pros-dl-not-checked/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ca-pros-dl-not-checked/add-order', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/ca-pros-dl-not-checked/get-task', $parameters);
    }

    public function getAvailableParams($parameters = [])
    {
        return $this->post('/ca-pros-dl-not-checked/get-available-params', $parameters);
    }
}