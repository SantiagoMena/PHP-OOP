<?php
namespace Source\Weapons;
use Source\Unit;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;

    public function getDamage(): float
    {
        return $this->damage;
    }

    abstract public function getDescription(Unit $attacker, Unit $opponent): string;
}