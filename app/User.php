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

    public function accounts(){
        $this->hasMany(UserExample::class);
        $this->hasOne(ClassOne::class);
        $this->belongsTo(Example::class);
        $this->belongsToMany(ExampleTwo::class);
        $this->hasManyThrough(DependencyClass::class,,)
    }

}
