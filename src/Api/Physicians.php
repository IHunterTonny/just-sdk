<?php

namespace Just\Api;

class Physicians extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/physicians/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/physicians/create', $parameters);
    }

    public function getCreationVariants($parameters = [])
    {
        return $this->post('/physicians/get-creation-variants', $parameters);
    }
}