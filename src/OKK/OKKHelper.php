<?php

namespace Apsg\ZHP\OKK;

abstract class OKKHelper
{
    const ALL = [
        self::NONE => 'Brak',
        self::BOKK => 'Brązowa',
        self::SOKK => 'Srebrna',
        self::ZOKK => 'Złota',
    ];

    const NONE = 0;
    const BOKK = 1;
    const SOKK = 2;
    const ZOKK = 3;

    public static function name(int $id): string
    {
        if (! array_key_exists($id, self::ALL)) {
            return '';
        }

        return self::ALL[$id];
    }
}
