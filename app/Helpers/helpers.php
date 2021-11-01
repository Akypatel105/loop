<?php

// namespace App\Helpers;

if (!function_exists('getRandomNumber')) {
    function getRandomNumber($length = 4)
    {
        $characters = '0123456789';
        $randomString = '';
        for ($i = 0; $i < $length; ++$i) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
}
