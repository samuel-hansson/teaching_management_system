<?php


namespace App;


class ExampleTwo
{
    private $foo;

    public function __construct($foo)
    {
        echo __METHOD__,'<br/>';
        $this->foo = $foo;
    }

}
