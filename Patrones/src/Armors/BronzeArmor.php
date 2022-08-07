<?php
namespace Source\Armors;
use Source\Attack;

class BronzeArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        return $attack->getDamage() / 2;
    }
}