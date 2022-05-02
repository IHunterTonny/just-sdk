<?php

namespace Just\Api;

class DlMvr extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/dl-mvr/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/dl-mvr/create', $parameters);
    }

    public function download($parameters = [])
    {
        return $this->post('/dl-mvr/download', $parameters);
    }
}