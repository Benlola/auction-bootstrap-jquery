<?php

namespace App\Traits;

use Carbon\Carbon;

trait CalculateTimeDiff
{
    public function elapsed($attribute)
    {
        $countdown = app('product.countdown');
        $attribute = $this->{$attribute};
        $now = Carbon::now();

        return $countdown->from($attribute)->to($now)->get();
    }

    public function until($attribute)
    {
        $countdown = app('product.countdown');
        $attribute = $this->{$attribute};
        $now = Carbon::now();

        return $countdown->from($now)->to($attribute)->get();
    }
}
