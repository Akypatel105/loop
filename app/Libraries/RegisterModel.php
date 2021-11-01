<?php

namespace App\Libraries;

namespace App\Models\User;

use Illuminate\Support\Facades\DB;

class RegisterModel
{
    public function isUserExists($email, $countrycode, $mobile)
    {
        echo 'Hi i am in a function';
        exit();

        DB::enableQueryLog();

        $query = User::where(function ($q) use ($email, $countrycode) {
            $q->where('email', '=', $email)
                    ->orWhere('country_code', '=', $countrycode)
                    ->orWhere('mobileNumber', '=', $mobileNumber);
        })
                ->count();
        dd(DB::getQueryLog());

        return ($query > 0) ? true : false;
    }
}
