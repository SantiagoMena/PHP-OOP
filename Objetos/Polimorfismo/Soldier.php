<?php
/**
 * Clase unidad de batalla tipo Soldado
 */
class Soldier extends Unit
{
    protected float $damage = 10;
    protected $armor;

    public function __construct(string $name, $armor = 2) {
        $this->armor = $armor;
        parent::__construct($name);
    }

    /**
     * Asignar valor del atributo `armor`
     *
     * @param [type] $armor
     * @return void
     */
    public function setArmor($armor)
    {
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
     * Sobrecarga del método para infrigir daños en una unidad
     *
     * @param float $damage
     * @return void
     */
    public function takeDamage(float $damage): void
    {
        parent::takeDamage($damage / $this->armor);
    }

    /**
     * Obtener el valor del atributo `damage`
     */
    public function getDamage()
    {
        return $this->damage;
    }
}