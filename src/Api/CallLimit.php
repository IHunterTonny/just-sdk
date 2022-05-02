<?php

namespace Just\Api;

class CallLimit extends AbstractApi
{
    public function get($parameters = [])
    {
        return $this->post('/call-limit/get', $parameters);
    }
}