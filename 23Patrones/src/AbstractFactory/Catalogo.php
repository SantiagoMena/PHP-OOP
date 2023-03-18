<?php

declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

class Catalogo
{
    public function __construct(protected FabricaVehiculoInterfaz $fabricaVehiculo) { }

    public function crearScooter(string $marca, string $color, int $potencia): AbstractScooter
    {
        return $this->fabricaVehiculo->crearScooter(marca: $marca, color: $color, potencia: $potencia);
    }

    public function crearAutomovil(string $marca, string $color, int $potencia, float $espacio): AbstractAutomovil
    {
        return $this->fabricaVehiculo->crearAutomovil(marca: $marca, color: $color, potencia: $potencia, espacio: $espacio);
    }
}
