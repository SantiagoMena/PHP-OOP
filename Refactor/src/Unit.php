<?php
namespace Source;

use Helpers\Message;
use Source\Armors\Armor;

/**
 * Clase unidad de batalla
 */
abstract class Unit
{
    protected float $health = 40;
    protected string $name;
    protected ?Armor $armor = null;
    protected float $damage = 20;

    public function __construct(string $name, $damage = null)
    {
        $this->name = $name;

        if($damage) {
            $this->damage = $damage;
        }
    }

    /**
     * Obtener el valor del atributo `name`
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Mover la unidad a una dirección
     *
     * @param string $direction
     * @return void
     */
    public function move(string $direction): void
    {
        Message::show("{$this->name} avanza hacia {$direction}");
    }

    /**
     * Método de muerte de la unidad
     *
     * @return void
     */
    public function die(): void
    {
        Message::show("{$this->name} muere");
        exit();
    }

    /**
     * Obtener el valor de `health`
     *
     * @return float
     */
    public function getHealth(): float
    {
        return $this->health;
    }

    /**
     * Asignar el valor de `health`
     *
     * @param float $health
     * @return self
     */
    public function setHealth(float $health): self
    {
        $this->health = $health;

        Message::show("{$this->getName()} ahora tiene {$this->getHealth()} de vida");

        return $this;
    }

    /**
     * Método abstracto de ataque a un oponente
     *
     * @param Unit $opponent
     * @return void
     */
    abstract public function attack(Unit $opponent): void; 

    /**
     * Método de infringir daño a una unidad
     *
     * @param float $damage
     * @return void
     */
    public function takeDamage(float $damage): void
    {
        $this->setHealth($this->health - $this->absorbDamage($damage));
        
        if($this->health <= 0) {
            $this->die();
        }
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
}