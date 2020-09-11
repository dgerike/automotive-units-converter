<?php

namespace dgerike\Aumuc;

trait Weight
{
    /**
     * Convert "kg (kilogram)" to "lb (pound)"
     *
     * @param $kg
     * @return float
     */
    public static function kg2lb(float $kg): float
    {
        return $kg / 0.45359237;
    }

    /**
     * Convert "lb (pound)"" to "kg (kilogram)"
     *
     * @param $lb
     * @return float
     */
    public static function lb2kg(float $lb): float
    {
        return $lb * 0.45359237;
    }
}
