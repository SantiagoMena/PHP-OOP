<?php
declare(strict_types=1);
namespace Php\Oop\Decorator;

class VistaVehiculo implements ComponenteGraficoVehiculoInterfaz
{
    public function visualiza(): void
    {
        echo 'Visualización del vehiculo' . PHP_EOL;
    }
}