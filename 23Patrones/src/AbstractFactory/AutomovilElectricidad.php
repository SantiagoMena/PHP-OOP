<?php
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

class AutomovilElectricidad extends AbstractAutomovil
{
    public function mostrarCaracteristicas(): void
    {
       echo "Automóvil eléctrico - marca: $this->marca" 
       . ", color: $this->color" 
       . ", potencia: $this->potencia" 
       . ", espacio: $this->espacio" . PHP_EOL;
    }
}
