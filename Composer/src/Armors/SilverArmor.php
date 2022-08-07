<?php
namespace Source\Armors;

class SilverArmor implements Armor
{
    public function absorbDamage($damage): float
    {
        return $damage / 3;
    }
}