<?php
namespace Source\Weapons;

use Source\Unit;
use Source\Weapons\Weapon;

class BasicSword extends Weapon
{
    protected $damage = 20;
    
    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
    }
}
