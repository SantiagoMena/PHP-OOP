<?php
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

class ScooterElectricidad extends AbstractScooter
{
    public function mostrarCaracteristicas(): void 
    { 
        echo "Scooter eléctrico - marca: $this->marca" 
            . ", color: $this->color" 
            . ", potencia: $this->potencia" . PHP_EOL; 
    } 
}
