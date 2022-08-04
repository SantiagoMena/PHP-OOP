<?php
/**
 * Clase unidad de batalla
 */
abstract class Unit
{
    protected float $health = 40;
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
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
        $this->setHealth($this->getHealth() - $damage);

        Message::show("{$this->getName()} ahora tiene {$this->getHealth()} de vida");
        
        if($this->getHealth() <= 0) {
            $this->die();
        }
    }
}