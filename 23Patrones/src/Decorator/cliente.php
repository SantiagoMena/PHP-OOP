<?php
declare(strict_types=1);
namespace Php\Oop\Decorator;

require __DIR__ . '/../../vendor/autoload.php';

$vistaVehiculo = new VistaVehiculo();
$modeloDecorador = new ModeloDecorador($vistaVehiculo);
$marcaDecorador = new MarcaDecorador($modeloDecorador);
$marcaDecorador->visualiza();