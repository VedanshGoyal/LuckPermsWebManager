<?php

namespace App\Models\LuckPerms;

use Carbon;

class Action extends Model
{
    protected $table = 'actions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time', 'actor_uuid', 'actor_name', 'type', 'acted_uuid', 'acted_name', 'action',
    ];

    public static function log($actedName, $action)
    {
        $log = new self();

        $log->time = Carbon::now()->timestamp;
        $log->actor_uuid = self::generateUUID();
        $log->actor_name = 'LPWM';
        $log->type = 'G';
        $log->acted_uuid = 'null';
        $log->acted_name = $actedName;
        $log->action = $action;

        $log->save();
    }

    public static function generateUUID()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x3000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }
}
