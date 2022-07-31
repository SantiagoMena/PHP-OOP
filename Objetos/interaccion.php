<?php

class Message
{
    public static function show(String $message)
    {
        echo "{$message}\n";
    }
}
abstract class Unit
{
    protected $health = 40;
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * move Unit
     */
    public function move(string $direction)
    {
        Message::show("{$this->name} avanza hacia {$direction}");
    }

    /**
     * die Unit
     */
    public function die()
    {
        Message::show("{$this->name} muere");
    }

    /**
     * Get the value of health
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set the value of health
     */
    public function setHealth($health): self
    {
        $this->health = $health;

        return $this;
    }
    abstract public function attack(Unit $opponent): void; 

    public function takeDamage($damage)
    {
        $this->setHealth($this->getHealth() - $damage);

        Message::show("{$this->getName()} ahora tiene {$this->getHealth()} de vida");
        
        if($this->getHealth() <= 0) {
            $this->die();
        }
    }
}

class Soldier extends Unit
{
    protected $damage = 10;
    public function attack(Unit $opponent): void
    {
        Message::show("{$this->name} golpea a {$opponent->getName()}");

        $this->takeDamage($opponent->getDamage());
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }

    /**
     * Get the value of damage
     */
    public function getDamage()
    {
        return $this->damage;
    }
}

class Archer extends Unit
{
    protected $damage = 20;
    public function attack(Unit $opponent): void
    {
        Message::show("{$this->name} dispara a {$opponent->getName()}");
        $this->takeDamage($this->damage);
    }

    /**
     * Get the value of damage
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
