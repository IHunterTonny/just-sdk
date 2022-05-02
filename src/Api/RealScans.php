<?php

namespace Just\Api;

class RealScans extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/real-scans/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/real-scans/create', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/real-scans/price', $parameters);
    }
}