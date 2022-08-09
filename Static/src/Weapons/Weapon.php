<?php
namespace Source\Weapons;
use Source\Attack;

abstract class Weapon
{
    protected float $damage = 0;
    protected bool $magical = false;

    public function createAttack(): Attack
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('Source\Weapons\\', '', get_class($this)).'Attack';
    }
}