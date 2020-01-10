<?php

namespace Apsg\ZHP\Choragwie;

use Illuminate\Contracts\Validation\Rule;

class ChoragiewRule implements Rule
{
    public function passes($attribute, $value) : bool
    {
        if (!is_numeric($value)) {
            return false;
        }

        return in_array((int)$value, array_keys(ChoragwieHelper::ALL));
    }

    public function message() : string
    {
        return 'Nieprawidłowa chorągiew.';
    }
}
