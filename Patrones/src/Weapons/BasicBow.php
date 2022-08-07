<?php
namespace Source\Weapons;

use Source\Unit;
use Source\Attack;

class BasicBow extends Weapon
{
    protected float $damage = 20;
    protected bool $magical = false;
    protected string $description = ':unit lanza una flecha a :opponent';
}
