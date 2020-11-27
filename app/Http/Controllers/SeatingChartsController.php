<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;

class SeatingChartsController extends Controller
{
    //
    public function show($classroom_code)
    {
        //

        $classrooms = Classroom::with('computer_rooms')
                        ->where('code',$classroom_code)
                        ->first()['computer_rooms'];
        return $classrooms;
    }
}
