<?php
declare(strict_types=1);
namespace Php\Oop\FactoryMethod;

require __DIR__ . '/../../vendor/autoload.php';

$cliente = new ClienteContado();
$cliente->nuevoPedido(2000);
$cliente->nuevoPedido(10000);

$cliente = new ClienteCredito();
$cliente->nuevoPedido((2199.99));
$cliente->nuevoPedido(10000);