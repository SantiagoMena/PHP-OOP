<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

interface CatalogoInterfaz
{
    public function encuentraVehiculos(float $precioMin, float $precioMax): array;
}