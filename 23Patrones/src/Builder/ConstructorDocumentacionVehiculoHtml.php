<?php 
declare(strict_types=1); 
namespace Php\Oop\Builder;

class ConstructorDocumentacionVehiculoHtml extends AbstractConstructorDocumentacionVehiculo
{
    public function __construct() {
        $this->documentacion = new DocumentacionHtml();
    }

    public function generaFormularioPedido(string $nombreCliente)
    {
        $documento = "<HTML>Formulario de solicitud del cliente: $nombreCliente</HTML>"; 
        $this->documentacion->agregarDocumento($documento);
    }

    public function generaSolicitudMatriculacion(string $nombreSolicitante)
    {
        $documento = "<HTML>Solicitud de matriculación - Solicitante: $nombreSolicitante</HTML>"; 
        $this->documentacion->agregarDocumento($documento); 
    }
}
