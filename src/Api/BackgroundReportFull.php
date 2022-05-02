<?php

namespace Just\Api;

class BackgroundReportFull extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/background-report-full/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/background-report-full/create', $parameters);
    }

    public function one($parameters = [])
    {
        return $this->post('/background-report-full/get-task', $parameters);
    }

    public function price($parameters = [])
    {
        return $this->post('/background-report-full/price', $parameters);
    }
}