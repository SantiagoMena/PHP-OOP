<?php

declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

class FabricaVehiculoGasolina implements FabricaVehiculoInterfaz
{
    public function crearAutomovil(string $marca, string $color, int $potencia, float $espacio): AbstractAutomovil
    {
        return new AutomovilGasolina(marca: $marca, color: $color, potencia: $potencia, espacio:  $espacio);
    }

    public function crearScooter(string $marca, string $color, int $potencia): AbstractScooter
    {
        return new ScooterGasolina(marca: $marca, color: $color, potencia: $potencia);
    }
}