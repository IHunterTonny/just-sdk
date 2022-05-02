<?php

namespace Just\Api;

class MmnManual extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/mmn-manual/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/mmn-manual/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/mmn-manual/get-task', $parameters);
    }
}