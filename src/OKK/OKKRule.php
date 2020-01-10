<?php

namespace Apsg\ZHP\OKK;

use Illuminate\Contracts\Validation\Rule;

class OKKRule implements Rule
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
