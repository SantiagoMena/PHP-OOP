<?php
/**
 * Clase unidad de batalla tipo Soldado
 */
class Soldier extends Unit
{
    protected float $damage = 10;

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
        parent::takeDamage($damage / 2);
    }

    /**
     * Obtener el valor del atributo `damage`
     */
    public function getDamage()
    {
        return $this->damage;
    }
}