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


