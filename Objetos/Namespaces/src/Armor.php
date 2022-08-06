<?php
namespace Source;

interface Armor
{
    public function absorbDamage($damage): float;
}