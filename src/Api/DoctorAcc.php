<?php

namespace Just\Api;

class DoctorAcc extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/doctor-acc/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/doctor-acc/create', $parameters);
    }
}