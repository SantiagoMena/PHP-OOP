<?php
namespace Source;

use Warcraft\Armor as WarcraftArmor;
class SilverArmor implements WarcraftArmor
{
    public function absorbDamage($damage): float
    {
        return $damage / 3;
    }
}