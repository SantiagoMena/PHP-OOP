<?php

namespace Source;

class Attack
{
    protected float $damage;
    protected bool $magical;
    protected string $description;

    public function __construct(float $damage, bool $magical, string $description) {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical()
    {
        return $this->magical;
    }

    public function isPhysical()
    {
        return ! $this->isMagical();
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return str_replace(
            [':unit', ':opponent'],
            [$attacker->getName(), $opponent->getName()],
            $this->description
        );
    }
}
