<?php

namespace Apsg\ZHP\Stopnie;

use Illuminate\Contracts\Validation\Rule;

class StopnieRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        if (! is_numeric($value)) {
            return false;
        }

        return in_array((int) $value, array_keys(StopnieHelper::ALL));
    }

    public function message(): string
    {
        return 'Nieprawidłowy stopień.';
    }
}
