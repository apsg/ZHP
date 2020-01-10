<?php
namespace Apsg\ZHP\Rules;

use Apsg\ZHP\ZHP;
use Illuminate\Contracts\Validation\Rule;

class ChoragiewRule implements Rule
{
    public function passes($attribute, $value) : bool
    {
        if (!is_numeric($value)) {
            return false;
        }

        return in_array((int)$value, array_keys(ZHP::CHORAGWIE));
    }

    public function message() : string
    {
        return 'Nieprawidłowa chorągiew.';
    }
}
