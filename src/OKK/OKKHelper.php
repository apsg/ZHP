<?php

namespace Apsg\ZHP\OKK;

use Apsg\ZHP\HasNamesTrait;

abstract class OKKHelper
{
    use HasNamesTrait;

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
}
