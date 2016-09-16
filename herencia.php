<?php

function show($message)
{
    echo "<p>$message</p>";
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
