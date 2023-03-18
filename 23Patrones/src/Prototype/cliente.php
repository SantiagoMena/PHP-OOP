<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

require __DIR__ . '/../../vendor/autoload.php';

$documentacionEnBlanco = DocumentacionEnBlanco::getInstance();

$certificadoCesion = new CertificadoCesion();

$documentacionEnBlanco->agrega(new OrdenDePedido());
$documentacionEnBlanco->agrega($certificadoCesion);
$documentacionEnBlanco->agrega(new SolicitudMatriculacion());

$documentacionEnBlancoCliente = new DocumentacionCliente('Santiago Mena');
$documentacionEnBlancoCliente->muestra();
$documentacionEnBlancoCliente->imprime();

echo "\n";
$documentacionEnBlanco->elimina($certificadoCesion);
$documentacionEnBlancoCliente2 = new DocumentacionCliente('Daniel Peña');
$documentacionEnBlancoCliente2->muestra();
$documentacionEnBlancoCliente2->imprime();