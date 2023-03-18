<?php
declare(strict_types=1);
namespace Php\Oop\Composite;

class EmpresaMadre extends AbstractEmpresa
{
    protected array $filiales = [];

    public function agregarFilial(AbstractEmpresa $filial): bool
    {
        $this->filiales[] = $filial;

        return true;
    }

    public function calculaCosteMantenimiento(): float
    {
        $coste = 0;

        foreach ($this->filiales as $filial) {
            $coste += $filial->calculaCosteMantenimiento();
        }

        return $coste + $this->numVehiculos * self::$costeUnitarioVehiculo;
    }
}
