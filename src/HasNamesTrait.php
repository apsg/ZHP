<?php

namespace Apsg\ZHP;

trait HasNamesTrait
{
    public static function name(int $id) : string
    {
        if (!array_key_exists($id, self::ALL)) {
            return '';
        }

        return self::ALL[$id];
    }
}
