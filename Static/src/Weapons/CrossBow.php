<?php
namespace Source\Weapons;

use Source\Unit;

class CrossBow extends Weapon
{
    protected float $damage = 40;
    protected bool $magical = false;
    protected string $description = ':unit lanza una flecha a :opponent';
}
