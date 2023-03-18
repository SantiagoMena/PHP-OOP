<?php
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

class ScooterGasolina extends AbstractScooter
{
    public function mostrarCaracteristicas(): void 
    { 
        echo "Scooter de gasolina - marca: $this->marca" 
            . ", color: $this->color" 
            . ", potencia: $this->potencia" . PHP_EOL; 
    } 
}
