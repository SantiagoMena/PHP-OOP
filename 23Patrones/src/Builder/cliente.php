<?php 
declare(strict_types=1); 
namespace Php\Oop\Builder;

require __DIR__ . '/../../vendor/autoload.php';

$constructoresDocumentacion = [
    new ConstructorDocumentacionVehiculoHtml(),
    new ConstructorDocumentacionVehiculoPdf(),
];

foreach ($constructoresDocumentacion as $constructorDocumentacion) {
    $vendedor = new Vendedor(constructorDocumentacion: $constructorDocumentacion);

    $documentacion = $vendedor->genera(nombreCliente: 'Santiago');
    $documentacion->imprime();
}