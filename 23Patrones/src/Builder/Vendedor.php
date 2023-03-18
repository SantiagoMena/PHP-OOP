<?php 
declare(strict_types=1); 
namespace Php\Oop\Builder;

class Vendedor
{
    public function __construct(protected AbstractConstructorDocumentacionVehiculo $constructorDocumentacion) { }

    public function genera(string $nombreCliente): AbstractDocumentacion
    {
        $this->constructorDocumentacion->generaFormularioPedido($nombreCliente);
        $this->constructorDocumentacion->generaSolicitudMatriculacion($nombreCliente);

        return $this->constructorDocumentacion->resultado();
    }
}