<?php
namespace Source\Weapons;

use Source\Unit;
use Source\Weapons\Weapon;

class CrossBow extends Weapon
{
    protected $damage = 40;
    
    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} lanza una flecha con la ballesta a {$opponent->getName()}";
    }
}
