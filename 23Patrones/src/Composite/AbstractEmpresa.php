<?php
declare(strict_types=1);
namespace Php\Oop\Composite;

abstract class AbstractEmpresa
{
    protected static float $costeUnitarioVehiculo = 5;

    protected int $numVehiculos = 0;

    public function agregarVehiculo(): void
    {
        $this->numVehiculos++;
    }

    abstract public function calculaCosteMantenimiento(): float;

    abstract public function agregarFilial(AbstractEmpresa $filial): bool;
}
