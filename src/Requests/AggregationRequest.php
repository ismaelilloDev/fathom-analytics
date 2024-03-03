<?php

namespace Ismaelillodev\FathomAnalytics\Requests;

use Ismaelillodev\FathomAnalytics\Contracts\FathomRequest;
use Ismaelillodev\FathomAnalytics\DTO\Aggregation;
use Ismaelillodev\FathomAnalytics\Enums\RestRequest;

class AggregationRequest extends FathomRequest
{
    public function __construct(
        public Aggregation $aggregation
    ) {
    }

    public function getMethod(): string
    {
        return RestRequest::GET->value;
    }

    public function getUri(): string
    {
        return '/v1/aggregations';
    }

    public function getQueryParams(): ?array
    {
        return $this->aggregation->toQueryParam();
    }
}
