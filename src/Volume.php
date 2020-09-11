<?php

namespace dgerike\Aumuc;

trait Volume
{
    /**
     * Convert "ccm (cubic centimetre)" to "cu in (cubic inch)"
     *
     * @param float $ccm
     * @return float
     */
    public static function ccm2cuin(float $ccm): float
    {
        return $ccm / 16.38706;
    }

    /**
     * Convert "cu in (cubic inch)" to "ccm (cubic centimetre)"
     *
     * @param float $cuin
     * @return float
     */
    public static function cuin2ccm(float $cuin): float
    {
        return $cuin * 16.38706;
    }
}
