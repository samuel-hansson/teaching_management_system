<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function index(Example $example){
//        ddd($example);

        ddd(resolve('App\Example'),resolve('App\Example'));

    }

    public function testSession(){
        \request()->session()->put('a','b');
    }
}
