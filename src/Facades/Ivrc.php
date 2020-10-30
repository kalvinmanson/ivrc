<?php

namespace Lavenir\Ivrc\Facades;

use Illuminate\Support\Facades\Facade;

class Ivrc extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'ivrc';
    }
}
