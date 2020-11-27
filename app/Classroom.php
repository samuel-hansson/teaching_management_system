<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //

    public function computer_rooms()
    {
        return $this->hasMany('App\ComputerRoom');
    }
}
