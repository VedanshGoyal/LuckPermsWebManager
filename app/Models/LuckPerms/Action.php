<?php

namespace App\Models\LuckPerms;

class Action extends Model
{
    protected $table = 'actions';

    public static function convertTime($time = null) {
        if(is_null($time)) {
            return;
        }

        return $time;
    }
}
