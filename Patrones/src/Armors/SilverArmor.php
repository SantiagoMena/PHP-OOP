<?php
namespace Source\Armors;
use Source\Attack;

class SilverArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        if($attack->isPhysical()) {
            return $attack->getDamage() / 3;
        }

        return $attack->damage;
    }
}