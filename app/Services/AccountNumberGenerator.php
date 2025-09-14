<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AccountNumberGenerator
{
    protected static array $generated = [];

    public static function generate($table = 'accounts', $column = 'account_number', $prefix = '702'): string
    {
        do {
            $number = (string) random_int(100000, 999999);
        } while (
            in_array($number, self::$generated, true) ||  // check in-memory
            DB::table($table)->where($column, $number)->exists() // check DB
        );

        self::$generated[] = $number; // store in-memory

        return $prefix . $number;
    }
}
