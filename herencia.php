<?php

function show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit {
    protected $hp = 40;
    protected $neame;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    private function setHp($points)
    {
        $this->hp = $points;

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }

    public function move($direction)
    {
        show("{$this->name} avanza hacea $direction</p>";
    }

    abstract public function attack(Unit $opponent)

    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $damage);

        if ($this->hp <= 0) {
            $this->die();
        }

    }

    public function die()
    {
        show("{$this->name} muere");

        exit();
    }
}

class Soldier extends Unit
{
    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function attack(Unit $ooponet)
    {
        show("{$this->name} ataco con la espada a  {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        $damage = $this->absorbDamage($damage);

        return parent::takeDamage($damage);
    }

    public function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }

}

class Archer extends Unit{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} dispara una flecha a  {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

    }
    public function takeDamage($damage)
    {
        if (rand(0,1)) {
            return parent::takeDamage($damage);
        }

    }
}

interface Armor
{
    public function absorbDamage($damage);
}


class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

class CursedArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}



$armor = new BronzeArmor();
$ram = new Soldier('Ram');

$silence = new Unit('Silence');
// $silence->move('El norte');

$silence->attack($ram);

$ram->setArmor($armor)

$ram->attack($silence);
