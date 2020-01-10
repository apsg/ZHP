<?php

namespace Apsg\ZHP\OKK;

use Illuminate\Validation\Rule;

class OKKRule extends Rule
{
    public function passes($attribute, $value): bool
    {
        if (! is_numeric($value)) {
            return false;
        }

        return in_array((int) $value, array_keys(OKKHelper::ALL));
    }

    public function message(): string
    {
        return 'Nieprawidłowa odznaka.';
    }
}
