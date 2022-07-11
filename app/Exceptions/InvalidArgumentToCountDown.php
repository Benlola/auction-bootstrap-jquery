<?php

namespace App\Exceptions;

use InvalidArgumentException;

class InvalidArgumentToCountDown extends InvalidArgumentException
{
    protected $message = 'You must at least tell where to count from.';
}
