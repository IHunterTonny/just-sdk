<?php

namespace Just\Api;

class PhoneCr extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/phone-cr/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/phone-cr/create', $parameters);
    }

    public function getAreaCodes($parameters = [])
    {
        return $this->post('/phone-cr/get-area-codes', $parameters);
    }

    public function checkNumber($parameters = [])
    {
        return $this->post('/phone-cr/check-number', $parameters);
    }
}