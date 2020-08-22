<?php

namespace dgerike\Aumuc;

class Aumuc
{
    use Speed;
    use Weight;
    use Force;

    /**
     * Generic converter
     *
     * @param string $from convert from this unit
     * @param float $value
     * @param string $to convert to this unit
     * @return float
     */
    public static function convert(string $from, float $value, string $to)
    {
        $method = $from . '2' . $to;

        return self::$method($value);
    }
}
