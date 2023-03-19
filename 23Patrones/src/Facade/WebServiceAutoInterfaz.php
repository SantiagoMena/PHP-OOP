<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

interface WebServiceAutoInterfaz
{
    public function buscarDocumento(int $indice): string;

    public function buscaVehiculos(float $precioMedio, int $desviacionMax): array;
}