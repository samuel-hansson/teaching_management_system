<?php


namespace App;


class ClassOne
{
    private $foo;
    public function __construct(DependencyClass $foo)
    {
        $this->foo = $foo;
    }

}
