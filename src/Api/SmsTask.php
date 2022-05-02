<?php

namespace Just\Api;

class SmsTask extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/sms-task/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/sms-task/create', $parameters);
    }

    public function stop($parameters = [])
    {
        return $this->post('/sms-task/stop', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/sms-task/price', $parameters);
    }
}