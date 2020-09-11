<?php

namespace dgerike\Aumuc;

trait Force
{
    /**
     * @param $nm
     * @return float
     */
    public static function nm2lbfft($nm): float
    {
        return $nm / 1.355818;
    }

    /**
     * @param $lbfft
     * @return float
     */
    public static function lbfft2nm($lbfft): float
    {
        return $lbfft * 1.355818;
    }
}
