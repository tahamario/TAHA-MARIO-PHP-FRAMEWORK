<?php

namespace Core;

class Validator
{
    public static function string($value)
    {
        return strlen(trim($value)) == 0;
    }

    public static function length($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        $rslt_min  = strlen($value) < $min;
        $rslt_max = strlen($value) > $max;

        return ['rslt_min' => $rslt_min, 'rslt_max' => $rslt_max];
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
