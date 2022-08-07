<?php
namespace Source\Armors;
use Source\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack): float
    {
        return $attack->getDamage() / 3;
    }
}