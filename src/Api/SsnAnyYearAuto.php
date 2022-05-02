<?php

namespace Just\Api;

class SsnAnyYearAuto extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/ssn-any-year-auto/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/ssn-any-year-auto/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/ssn-any-year-auto/get-task', $parameters);
    }

    public function getListState($parameters = [])
    {
        return $this->post('/ssn-any-year-auto/get-list-state', $parameters);
    }

    public function stop($parameters = [])
    {
        return $this->post('/ssn-any-year-auto/stop-task', $parameters);
    }
}