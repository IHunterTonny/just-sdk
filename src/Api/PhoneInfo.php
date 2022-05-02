<?php

namespace Just\Api;

class PhoneInfo extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/phone-info/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/phone-info/add-order', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/phone-info/get-info', $parameters);
    }

    public function buy($parameters = [])
    {
        return $this->post('/phone-info/buy', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/phone-info/price', $parameters);
    }
}