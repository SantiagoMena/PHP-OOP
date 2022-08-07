<?php
namespace Source;

use Source\Armors\Armor;
use Source\Helpers\Message;

/**
 * Clase unidad de batalla tipo Soldado
 */
class Soldier extends Unit
{
    protected float $damage = 10;
    protected ?Armor $armor;

    public function __construct(string $name) {
        parent::__construct($name);
    }

    /**
     * Asignar valor del atributo `armor`
     *
     * @param [type] $armor
     * @return void
     */
    public function setArmor(?Armor $armor)
    {
        Message::show($this->getName() . " ahora tiene una armadura.");
        $this->armor = $armor;
    }

    /**
     * Implementación de la función attack
     *
     * @param Unit $opponent
     * @return void
     */
    public function attack(Unit $opponent): void
    {
        Message::show("{$this->name} ataca con la espada a {$opponent->getName()}");

        $this->takeDamage($opponent->getDamage());
    }

    
    /**
     * Método absorber daño
     *
     * @param float $damage
     * @return float
     */
    protected function absorbDamage(float $damage): float
    {
        if($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }

    /**
     * Obtener el valor del atributo `damage`
     */
    public function getDamage()
    {
        return $this->damage;
    }
}