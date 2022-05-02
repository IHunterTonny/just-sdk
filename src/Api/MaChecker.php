<?php

namespace Just\Api;

class MaChecker extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ma-checker/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ma-checker/create', $parameters);
    }

    public function getTask($parameters = [])
    {
        return $this->post('/ma-checker/get-task', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/ma-checker/price', $parameters);
    }
}