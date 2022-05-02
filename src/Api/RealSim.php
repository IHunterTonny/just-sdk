<?php

namespace Just\Api;

class RealSim extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/real-sim/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/real-sim/create', $parameters);
    }

    public function listSms($parameters = [])
    {
        return $this->post('/real-sim/list-sms', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/real-sim/price', $parameters);
    }

    public function buySms($parameters = [])
    {
        return $this->post('/real-sim/buy-sms', $parameters);
    }
}