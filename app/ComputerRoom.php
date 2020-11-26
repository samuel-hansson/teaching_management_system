<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComputerRoom extends Model
{
    //
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
}
