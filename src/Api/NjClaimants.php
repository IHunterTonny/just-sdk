<?php

namespace Just\Api;

class NjClaimants extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/nj-claimants/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/nj-claimants/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/nj-claimants/get', $parameters);
    }
}