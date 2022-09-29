<?php

namespace Just\Api;

class Vpn extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/vpn/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/vpn/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/vpn/get', $parameters);
    }

    public function stop($parameters = [])
    {
        return $this->post('/vpn/stop', $parameters);
    }

    public function start($parameters = [])
    {
        return $this->post('/vpn/start', $parameters);
    }

    public function autoRenew($parameters = [])
    {
        return $this->post('/vpn/auto-renew', $parameters);
    }

    public function tariffs($parameters = [])
    {
        return $this->post('/vpn/tariffs', $parameters);
    }
}