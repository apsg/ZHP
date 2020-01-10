<?php

namespace Apsg\ZHP\Stopnie;

abstract class StopnieHelper
{
    const GENDER_FEMALE = 0;
    const GENDER_MALE = 1;

    const ALL = [
        self::NONE => 'Brak',
        self::PWD  => 'Przewodniczka/Przewodnik',
        self::PHM  => 'Podharcmistrzyni/Podharcmistrz',
        self::HM   => 'Harcmistrzyni/Harcmistrz',
    ];

    const NONE = 0;
    const PWD = 1;
    const PHM = 2;
    const HM = 3;

    public static function name(int $id, int $gender = null): string
    {
        if ($gender === null || $id === self::NONE) {
            return self::ALL[$id];
        }

        $names = explode('/', self::ALL[$id]);

        return $names[$gender];
    }
}
