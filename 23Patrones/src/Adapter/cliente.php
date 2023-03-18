<?php
declare(strict_types=1);

namespace Php\Oop\Adapter;

require __DIR__ . '/../../vendor/autoload.php';

$documentoHtml = new DocumentoHtml();
$documentoHtml->setContenido('Hola');
$documentoHtml->dibuja();

$documentoPdf = new DocumentoPdf();
$documentoPdf->setContenido('Hello');
$documentoPdf->dibuja();