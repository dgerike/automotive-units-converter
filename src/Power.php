<?php

namespace dgerike\Aumuc;

trait Power {
    /**
     * Convert "PS (horsepower)" to "kW (kilowatt)"
     *
     * @param float $ps
     * @return float
     */
    public static function ps2kw(float $ps): float
    {
        return $ps * 0.73549875;
    }

    /**
     * Convert "PS (horsepower)" to "bhp (brake horsepower)".
     *
     * @param float $ps
     * @return float
     */
    public static function ps2bhp(float $ps): float
    {
        return $ps * 0.98632;
    }

    /**
     * Convert "kW (kilowatt)" to "PS (horsepower)"
     *
     * @param float $kw
     * @return float
     */
    public static function kw2ps(float $kw): float
    {
        return $kw / 0.73549875;
    }

    /**
     * Convert "kW (kilowatt)" to "bhp (brake horsepower)"
     *
     * @param float $kw
     * @return float
     */
    public static function kw2bhp(float $kw): float
    {
        return $kw / 0.74570;
    }

    /**
     * Convert "bhp (brake horsepower)" to "kW (kilowatt)"
     *
     * @param float $bhp
     * @return float
     */
    public static function bhp2kw(float $bhp): float
    {
        return $bhp * 0.74570;
    }

    /**
     * Convert "bhp (brake horsepower)" to "PS (horsepower)"
     *
     * @param float $bhp
     * @return float
     */
    public static function bhp2ps(float $bhp): float
    {
        return $bhp / 0.98632;
    }
}
