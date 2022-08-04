<?php

class Message
{
    public static function show(String $message)
    {
        echo "{$message}\n";
    }
}

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
        Message::show("{$this->name} golpea a {$opponent->getName()}");

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
        return parent::takeDamage($damage / 2);
    }

    /**
     * Obtener el valor del atributo `damage`
     */
    public function getDamage()
    {
        return $this->damage;
    }
}

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
}

$silence = new Soldier("Silence");
$silence->move("el norte");

$arquero = new Archer("Arquero");
$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
