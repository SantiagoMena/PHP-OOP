<?php
namespace Source\Armors;
use Source\Attack;

interface Armor
{
    public function absorbDamage(Attack $attack): float;
}