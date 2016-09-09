<?php

abstract class Unit {
    protected $alive = true;
    protected $neame;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direction)
    {
        echo "<p>{ $this->name} avanza hacea {$direction}</p>"
    }

    abstract public function attack($opponent)
}

class Soldier extends Unit
{
    public function attack($ooponet)
    {
        echo "<p>{$this->name} corta a $opponent en dos</p>"
    }

}

class Archer extends Unit{
    public function attack($ooponet)
    {
        echo "<p>{$this->name} dispara una flecha a  $opponent en dos</p>"
    }
}

$silence = new Unit('Silence');
$silence->move('El norte');
$silence->attack('Ramm');
