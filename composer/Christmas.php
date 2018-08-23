<?php

use Carbon\Carbon;

require_once 'vendor/autoload.php';

class Christmas
{
    const CHRISTMAS = '2018-12-25';

    public static function isItChristmas()
    {
        $cat = new Cat("James");

        return Carbon::now()->isSameDay(Carbon::createFromFormat('Y-m-d', self::CHRISTMAS));
    }
}