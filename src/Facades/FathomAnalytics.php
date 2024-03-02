<?php

namespace Ismaelillodev\FathomAnalytics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ismaelillodev\FathomAnalytics\FathomAnalytics
 */
class FathomAnalytics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ismaelillodev\FathomAnalytics\FathomAnalytics::class;
    }
}
