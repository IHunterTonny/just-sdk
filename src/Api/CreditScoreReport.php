<?php

namespace Just\Api;

class CreditScoreReport extends AbstractApi
{
    public function all($parameters = [])
    {
        return $this->post('/credit-score-report/list', $parameters);
    }

    public function create($parameters = [])
    {
        return $this->post('/credit-score-report/create', $parameters);
    }
}