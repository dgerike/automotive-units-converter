<?php

namespace dgerike\Aumuc;

trait Speed {
    /**
     * Convert "miles per hour" to "kilometers per hour"
     *
     * @param float $mih
     * @return float
     */
    public static function mih2kmh(float $mih): float
    {
        return $mih * 1.609344;
    }

    /**
     * Alias of mih2kmh().
     * Convert "miles per hour" to "kilometers per hour".
     *
     * @param float $mph
     * @return float
     */
    public static function mph2kmh(float $mph): float
    {
        return self::mih2kmh($mph);
    }

    /**
     * Convert "miles per hour" to "meters per second"
     *
     * @param float $mih
     * @return float
     */
    public static function mih2ms(float $mih): float
    {
        return $mih * 0.44704;
    }

    /**
     * Convert "kilometers per hour" to "miles per hour"
     *
     * @param float $kmh
     * @return float
     */
    public static function kmh2mph(float $kmh): float
    {
        return $kmh / 1.609344;
    }

    /**
     * Convert "kilometers per hour" to "meters per second"
     *
     * @param float $kmh
     * @return float
     */
    public static function kmh2ms(float $kmh): float
    {
        return $kmh * 1000 / 3600;
    }
}
