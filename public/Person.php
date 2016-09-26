<?php

namespace Styde;

class pg_version
{
    protected static $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

}

$duilio = new Person('Raul');

$ramon = new Person('Ramon');

echo "<p>{$duilio->name()}</p>"
echo "<p>{$ramon->name()}</p>"
