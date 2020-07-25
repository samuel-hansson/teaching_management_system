<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $timestamps = false;
    protected $attributes = [
        'intro' => '个人介绍',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

}
