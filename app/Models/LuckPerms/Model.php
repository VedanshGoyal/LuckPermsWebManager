<?php

namespace App\Models\LuckPerms;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    protected $connection = 'luckperms';
    public $timestamps = false;
}
