<?php
declare(strict_types=1);
namespace Php\Oop\Composite;

require __DIR__.'/../../vendor/autoload.php';

$empresa1 = new EmpresaSinFilial();
$empresa1->agregarVehiculo();

$empresa2 = new EmpresaSinFilial();
$empresa2->agregarVehiculo();
$empresa2->agregarVehiculo();

$grupo = new EmpresaMadre();
$grupo->agregarFilial($empresa1);
$grupo->agregarFilial($empresa2);
$grupo->agregarVehiculo();

$costeMantenimiento = number_format($grupo->calculaCosteMantenimiento(), 2, ',', ' ');

echo "Coste de mantenimiento total del grupo: $costeMantenimiento" . PHP_EOL;