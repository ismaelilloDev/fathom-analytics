<?php

namespace Ismaelillodev\FathomAnalytics\Contracts;

abstract class FathomRequest
{
    abstract public function getMethod(): string;

    abstract public function getUri(): string;

    public function getBody(): ?array
    {
        return null;
    }

    public function getQueryParams(): ?array
    {
        return null;
    }
}
