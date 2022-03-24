<?php

namespace Lucacalcaterra\Swreports\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lucacalcaterra\Swreports\Swreports
 */
class Swreports extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'swreports';
    }
}
