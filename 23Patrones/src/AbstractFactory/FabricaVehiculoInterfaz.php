<?php
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

interface FabricaVehiculoInterfaz
{
    public function crearAutomovil(string $marca, string $color, int $potencia, float $espacio): AbstractAutomovil;

    public function crearScooter(string $marca, string $color, int $potencia, float $espacio): AbstractScooter;
}
