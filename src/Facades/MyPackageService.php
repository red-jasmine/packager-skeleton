<?php

namespace :uc:vendor\:uc:package\Facades;

use Illuminate\Support\Facades\Facade;

class :uc:packageService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ':lc:package';
    }
}
