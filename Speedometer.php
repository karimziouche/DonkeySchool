<?php

class Speedometer
{
    public const KM_TO_MILES = 0.621;

    public static function convertKmToMiles(float $km): float
    {
        return $km * self::KM_TO_MILES;
    }
    public static function convertMilesToKm(float $miles): float
    {
        return $miles / self::KM_TO_MILES;
    }
}

echo Speedometer::convertKmToMiles(10);