<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CountDownFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'product.countdown';
    }
}
