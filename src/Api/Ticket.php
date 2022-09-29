<?php

namespace Just\Api;

class Ticket extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ticket/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ticket/create', $parameters);
    }

    public function reply($parameters = [])
    {
        return $this->post('/ticket/reply', $parameters);
    }

    public function wallets($parameters = [])
    {
        return $this->post('/ticket/wallets', $parameters);
    }
}