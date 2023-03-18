<?php
declare(strict_types=1); 
namespace Php\Oop\Builder;

abstract class AbstractConstructorDocumentacionVehiculo
{
    protected AbstractDocumentacion $documentacion;

    public function resultado(): AbstractDocumentacion
    {
        return $this->documentacion;
    }

    abstract public function generaFormularioPedido(string $nombreCliente);
    abstract public function generaSolicitudMatriculacion(string $nombreSolicitante);

}
