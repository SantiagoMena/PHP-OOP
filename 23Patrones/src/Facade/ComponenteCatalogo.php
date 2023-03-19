<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

class ComponenteCatalogo implements CatalogoInterfaz
{
    public function __construct(protected array $vehiculos) { }

    public function encuentraVehiculos(float $precioMin, float $precioMax): array
    {
        $resultado = [];

        foreach ($this->vehiculos as $vehiculo) {
            $precio = $vehiculo->getPrecio();

            if(($precio >= $precioMin) && ($precio <= $precioMax)) {
                $resultado[] = $vehiculo;
            }
        }

        return $resultado;
    }
}
