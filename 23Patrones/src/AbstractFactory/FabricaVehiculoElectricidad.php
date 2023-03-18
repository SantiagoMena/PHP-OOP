<?php

declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

class FabricaVehiculoElectricidad implements FabricaVehiculoInterfaz
{
    public function crearAutomovil(string $marca, string $color, int $potencia, float $espacio): AbstractAutomovil
    {
        return new AutomovilElectricidad(marca: $marca, color: $color, potencia: $potencia, espacio:  $espacio);
    }

    public function crearScooter(string $marca, string $color, int $potencia): AbstractScooter
    {
        return new ScooterElectricidad(marca: $marca, color: $color, potencia: $potencia);
    }
}