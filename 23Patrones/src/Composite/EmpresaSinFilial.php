<?php
declare(strict_types=1);
namespace Php\Oop\Composite;

class EmpresaSinFilial extends AbstractEmpresa
{
    public function agregarFilial(AbstractEmpresa $filial): bool
    {
        return false;
    }

    public function calculaCosteMantenimiento(): float
    {
        return $this->numVehiculos * self::$costeUnitarioVehiculo;
    }
}
