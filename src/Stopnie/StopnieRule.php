<?php

namespace Apsg\ZHP\Stopnie;

use Illuminate\Validation\Rule;

class StopnieRule extends Rule
{
    public function passes($attribute, $value) : bool
    {
        if (!is_numeric($value)) {
            return false;
        }

        return in_array((int)$value, array_keys(StopnieHelper::ALL));
    }

    public function message() : string
    {
        return 'Nieprawidłowa chorągiew.';
    }
}
