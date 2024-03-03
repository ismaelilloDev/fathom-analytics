<?php

namespace Ismaelillodev\FathomAnalytics\Contracts;

abstract class FathomRequest {

    public abstract function getMethod(): string;

    public abstract function getUri(): string;

    public function getBody(): ?array
    {
        return null;
    }

    public function getQueryParams(): ?array
    {
        return null;
    }
}

