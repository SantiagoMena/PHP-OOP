<?php
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

class AutomovilGasolina extends AbstractAutomovil
{
    public function mostrarCaracteristicas(): void
    {
       echo "Automóvil de gasolina - marca: $this->marca" 
       . ", color: $this->color" 
       . ", potencia: $this->potencia" 
       . ", espacio: $this->espacio" . PHP_EOL;
    }
}
