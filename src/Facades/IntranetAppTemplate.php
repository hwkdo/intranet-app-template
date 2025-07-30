<?php

namespace Hwkdo\IntranetAppTemplate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hwkdo\IntranetAppTemplate\IntranetAppTemplate
 */
class IntranetAppTemplate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Hwkdo\IntranetAppTemplate\IntranetAppTemplate::class;
    }
}
