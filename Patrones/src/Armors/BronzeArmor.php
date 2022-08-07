<?php
namespace Source\Armors;
use Source\Attack;

class BronzeArmor extends Armor
{
    public function absorbMagicDamage(Attack $attack): float
    {
        return $attack->getDamage() / 2;
    }
}