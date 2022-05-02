<?php

namespace Just\Api;

class EmailTask extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/email-task/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/email-task/create', $parameters);
    }

    public function stop($parameters = [])
    {
        return $this->post('/email-task/stop', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/email-task/price', $parameters);
    }
}