<?php

namespace Styde;
use Styde\Weapons\BasicSword;

class Soldier extends Unit
{
    public function __construct($name)
    {
        parent::__construct($name, new BasicSword());
    }
}
