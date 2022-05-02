<?php

namespace Just\Api;

class UiChecker extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ui-checker/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ui-checker/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/ui-checker/get-task', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/ui-checker/price', $parameters);
    }
}