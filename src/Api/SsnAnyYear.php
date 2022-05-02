<?php

namespace Just\Api;

class SsnAnyYear extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ssn-any-year/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ssn-any-year/create', $parameters);
    }
}