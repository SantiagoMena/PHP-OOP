<?php 
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

require __DIR__.'/../../vendor/autoload.php';

$fabricas = [
    new FabricaVehiculoElectricidad(),
    new FabricaVehiculoGasolina(),
];

$colores = ['negro', 'rojo', 'blanco'];
$marcas = ['Suzuki', 'Peugeot', 'BMW'];

$vehiculos = [];

foreach ($fabricas as $fabrica) {
    $catalogo = new Catalogo($fabrica);

    $vehiculos[] = $catalogo->crearAutomovil(
        marca: $marcas[array_rand($marcas)],
        color: $colores[array_rand($colores)],
        potencia: mt_rand(110, 150),
        espacio: 3.2
    );

    $vehiculos[] = $catalogo->crearScooter(
        marca: $marcas[array_rand($marcas)],
        color: $colores[array_rand($colores)],
        potencia: mt_rand(110, 150)
    );
}

foreach ($vehiculos as $vehiculo) {
    $vehiculo->mostrarCaracteristicas();
}