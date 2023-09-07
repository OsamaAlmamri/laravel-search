<?php

namespace OsamaAlmamri\LaravelSearch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OsamaAlmamri\LaravelSearch\LaravelSearch
 */
class LaravelSearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OsamaAlmamri\LaravelSearch\LaravelSearch::class;
    }
}
