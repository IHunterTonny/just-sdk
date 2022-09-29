<?php

namespace Just\Api;

class Balance extends AbstractApi
{
    public function get($parameters = [])
    {
        return $this->post('/balance/get', $parameters);
    }

    public function writeOff($parameters = [])
    {
        return $this->post('/balance/write-off', $parameters);
    }

    public function createWallet($parameters = [])
    {
        return $this->post('/balance/create-wallet', $parameters);
    }

    public function getWallet($parameters = [])
    {
        return $this->post('/balance/get-wallet', $parameters);
    }
}