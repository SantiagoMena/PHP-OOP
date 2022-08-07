<?php
namespace Source\Weapons;

use Source\Unit;
use Source\Weapons\Weapon;

class BasicSword extends Weapon
{
    protected float $damage = 20;
    protected bool $magical = false;
    protected string $description = ':unit ataca con la espada a :opponent';
}
