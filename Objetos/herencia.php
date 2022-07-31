<?php
abstract class Unit
{
    protected $alive = true;
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move(string $direction)
    {
        echo "{$this->name} avanza hacia {$direction}\n";
    }

    abstract public function attack(string $opponent): void; 
}

class Soldier extends Unit
{
    public function attack(string $opponent): void
    {
        echo "{$this->name} golpea a {$opponent}\n";
    }
}

class Archer extends Unit
{
    public function attack(string $opponent): void
    {
        echo "{$this->name} dispara a {$opponent}\n";
    }
}

$silence = new Soldier("Silence");
$silence->move("el norte");
$silence->attack("Enemigo");

$arquero = new Archer("Arquero");
$arquero->attack("Silence");

echo "\n\n EJEMPLO DE ERROR instancia clase abstract \n\n";

// Error al instanciar una clase abstracta
try {
    $silence = new Unit("Silence");
    $silence->move("el norte");
    $silence->attack("Enemigo");    
} catch (\Throwable $th) {
    throw $th;
}
