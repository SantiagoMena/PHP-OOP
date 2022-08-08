<?php
namespace Source\Armors;

interface Armor
{
    public function absorbDamage($damage): float;
}