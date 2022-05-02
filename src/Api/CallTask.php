<?php

namespace Just\Api;

class CallTask extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/call-task/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/call-task/create', $parameters);
    }

    public function stop($parameters = [])
    {
        return $this->post('/call-task/stop', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/call-task/price', $parameters);
    }
}