<?php

namespace Ismaelillodev\FathomAnalytics;

use Ismaelillodev\FathomAnalytics\Client\FathomClient;
use Ismaelillodev\FathomAnalytics\DTO\Aggregation;
use Ismaelillodev\FathomAnalytics\Requests\AggregationRequest;

class FathomAnalytics
{
    public function __construct(
        private FathomClient $fathomClient
    ){}

    public function aggregations(Aggregation $aggregation)
    {
        return $this->fathomClient->send(new AggregationRequest($aggregation));
    }
}
