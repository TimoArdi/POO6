<?php


class Speedometer
{
    const MILES_IN_KM = 0.621371;

    public static function convertKmToMiles(int $km)
    {
        return ($km * self::MILES_IN_KM) . ' MILES' ;
    }

    public static function convertMilestoKm(int $miles)
    {
        return ($miles / self::MILES_IN_KM) . ' KM';
    }

}

