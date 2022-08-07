<?php
namespace Source\Weapons;

use Source\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} lanza una flecha a {$opponent->getName()}";
    }
}
