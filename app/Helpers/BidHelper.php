<?php

if ( ! function_exists('in_range')) {
    function in_range($number, $min, $max, $inclusive = false): bool
    {
        if (is_int($number) && is_int($min) && is_int($max)) {
            return $inclusive
                ? ($number >= $min && $number <= $max)
                : ($number > $min && $number < $max);
        }

        return false;
    }
}

if ( ! function_exists('nextBidPrice')) {
    function nextBidPrice(int $amount): int
    {
        try {
            if ($amount <= 100) {
                return 10;
            } elseif ($amount <= 500) {
                return 50;
            } elseif ($amount <= 1000) {
                return 100;
            } elseif ($amount <= 2000) {
                return 200;
            } elseif ($amount <= 5000) {
                return 500;
            } elseif ($amount <= 10000) {
                return 1000; }
            elseif ($amount <= 100000) {
                return 1000;
            }
            else{
                return 1000;
            }
        }
        catch (Exception $exception){
            return 1000;
        }

    }
}


