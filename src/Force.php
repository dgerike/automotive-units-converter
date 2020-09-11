<?php

namespace dgerike\Aumuc;

trait Force
{
    /**
     * Convert "Nm (newton-metre)" to "lbf ft (pound-foot)"
     *
     * @param $nm
     * @return float
     */
    public static function nm2lbfft(float $nm): float
    {
        return $nm / 1.355818;
    }

    /**
     * Convert "lbf ft (pound-foot)" to "Nm (newton-metre)"
     *
     * @param $lbfft
     * @return float
     */
    public static function lbfft2nm(float $lbfft): float
    {
        return $lbfft * 1.355818;
    }
}
