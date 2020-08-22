<?php

namespace dgerike\Aumuc;

trait Weight
{
    /**
     * @param $kg
     * @return float
     */
    public static function kg2lb($kg): float
    {
        return $kg / 0.45359237;
    }

    /**
     * @param $lb
     * @return float
     */
    public static function lb2kg($lb): float
    {
        return $lb * 0.45359237;
    }
}
