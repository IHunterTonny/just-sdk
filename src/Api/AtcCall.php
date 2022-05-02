<?php

namespace Just\Api;

class AtcCall extends AbstractApi
{
    public function startCall($parameters = [])
    {
        return $this->post('/atc-call/start', $parameters);
    }

    public function endCall($parameters = [])
    {
        return $this->post('/atc-call/end', $parameters);
    }
}