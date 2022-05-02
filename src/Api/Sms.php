<?php

namespace Just\Api;

class Sms extends AbstractApi
{
    public function listSmsReceive($parameters = [])
    {
        return $this->post('/sms/list-sms-receive', $parameters);
    }

    public function buySmsReceive($parameters = [])
    {
        return $this->post('/sms/buy-sms-receive', $parameters);
    }

    public function listSmsSend($parameters = [])
    {
        return $this->post('/sms/list-sms-send', $parameters);
    }

    public function listPhone($parameters = [])
    {
        return $this->post('/sms/list-phone', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/sms/price', $parameters);
    }

    public function send($parameters = [])
    {
        return $this->post('/sms/send', $parameters);
    }
}