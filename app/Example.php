<?php


namespace App;


class Example
{
    private $foo;
    public function __construct($foo)
    {
        echo __METHOD__,$foo,'<br/>';
    }

    public function go(){
        dump("it works!");
    }
}
