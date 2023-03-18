<?php

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
