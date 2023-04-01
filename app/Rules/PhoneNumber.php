<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        return substr($value,0,1) == '+' && strlen($value) == 14;
    }

    public function message()
    {
        return 'Telefon raqam + bilan boshlanib 13 ta raqam kiritish shart...❌❌❌';
    }
}
