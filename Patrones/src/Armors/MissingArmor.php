<?php
namespace Source\Armors;

use Source\Attack;

class MissingArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        return $attack->getDamage();
    }
}
