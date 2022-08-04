<?php

class BronzeArmor implements Armor
{
    public function absorbDamage($damage): float
    {
        return $damage / 2;
    }
}