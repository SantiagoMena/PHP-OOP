<?php
namespace Source\Weapons;

use Source\Unit;
use Source\Attack;

class BasicBow extends Weapon
{
    protected float $damage = 80;
    protected bool $magical = true;
    protected string $description = ':unit lanza una flecha de fuego a :opponent';
}
