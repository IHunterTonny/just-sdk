<?php

namespace Just\Api;

class PersonsInfo extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/persons-info/list', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/persons-info/get-task', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/persons-info/create', $parameters);
    }

    public function additionalInfo($parameters = [])
    {
        return $this->post('/persons-info/additional-info', $parameters);
    }

    public function buyAdditionalInfo($parameters = [])
    {
        return $this->post('/persons-info/buy-additional-info', $parameters);
    }

    public function getDob($parameters = [])
    {
        return $this->post('/persons-info/get-dob', $parameters);
    }
}