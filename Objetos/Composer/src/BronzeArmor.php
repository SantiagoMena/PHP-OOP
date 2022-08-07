<?php
namespace Source;

use Warcraft\Armor as WarcraftArmor;

class BronzeArmor implements WarcraftArmor
{
    public function absorbDamage($damage): float
    {
        return $damage / 2;
    }
}