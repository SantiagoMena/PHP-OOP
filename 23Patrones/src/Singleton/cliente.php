<?php
namespace Php\Oop\Singleton;

require __DIR__ . '/../../vendor/autoload.php';

$elComercial = Comercial::getInstance("Santiago Comercial", "santiago@comercial.com");
$elComercial->muestra();