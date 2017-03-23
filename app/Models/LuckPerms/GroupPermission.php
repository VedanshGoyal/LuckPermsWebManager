<?php

namespace App\Models\LuckPerms;

class GroupPermission extends Model
{
    protected $table = 'group_permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'permission', 'value', 
        'server', 'world', 'expiry', 
        'contexts',
    ];
}
