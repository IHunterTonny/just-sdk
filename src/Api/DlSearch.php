<?php

namespace Just\Api;

class DlSearch extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/dl-search/result', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/dl-search/create', $parameters);
    }

    public function buy($parameters = [])
    {
        return $this->post('/dl-search/buy', $parameters);
    }
    
    public function price($parameters = [])
    {
        return $this->post('/dl-search/price', $parameters);
    }
}