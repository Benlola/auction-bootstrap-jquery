<?php

namespace App\Exceptions;

use InvalidArgumentException;

class InvalidDateFormatToCountDown extends InvalidArgumentException
{
    protected $message = 'Invalid date string or object to parse.';
}
