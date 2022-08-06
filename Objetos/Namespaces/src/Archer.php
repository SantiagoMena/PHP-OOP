<?php
/**
 * Clase unidad de batalla tipo Arquero
 */
class Archer extends Unit
{
    protected float $damage = 20;

    /**
     * Implementación de la función attack
     *
     * @param Unit $opponent
     * @return void
     */
    public function attack(Unit $opponent): void
    {
        Message::show("{$this->name} dispara a {$opponent->getName()}");
        $this->takeDamage($this->damage);
    }

    /**
     * Obtener el valor del atributo `damage`
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Método de infringir daño para la unidad `archer` 
     *
     * @param float $damage
     * @return void
     */
    public function takeDamage(float $damage): void
    {
        // infringir daño 50% de posibilidades
        if(rand(0, 1)) {
            parent::takeDamage($damage);
        }
    }
}