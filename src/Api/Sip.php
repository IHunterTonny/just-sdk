<?php

namespace Just\Api;

class Sip extends AbstractApi
{
    public function getCallerId($parameters = [])
    {
        return $this->post('/sip/get-caller-id', $parameters);
    }

    public function setCallerId($parameters = [])
    {
        return $this->post('/sip/set-caller-id', $parameters);
    }
}