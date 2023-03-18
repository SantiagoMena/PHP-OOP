<?php
declare(strict_types=1);
namespace Php\Oop\Bridge;

require __DIR__ . '/../../vendor/autoload.php';

$formularioPortugal = new FormMatriculacionPortugal(implantacion: new FormHtml());
$formularioPortugal->muestra();

if($formularioPortugal->administracionZona()){
    $formularioPortugal->generaDocumento();
}

$fomularioEspana = new FormMatriculacionEspana(implantacion: new FormQt());
$fomularioEspana->muestra();

if($fomularioEspana->administracionZona()) {
    $fomularioEspana->generaDocumento();
}