<?php

namespace Just\Api;

class Mms extends AbstractApi
{
    public function listPhone($parameters = [])
    {
        return $this->post('/mms/list-phone', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/mms/price', $parameters);
    }

    public function send($parameters = [])
    {
        return $this->post('/mms/send', $parameters);
    }
}