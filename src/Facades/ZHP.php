<?php

namespace Apsg\ZHP\Facades;

use Illuminate\Support\Facades\Facade;

class ZHP extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zhp';
    }
}
