<?php 
declare(strict_types=1); 
namespace Php\Oop\Builder;

class ConstructorDocumentacionVehiculoPdf extends AbstractConstructorDocumentacionVehiculo
{
    public function __construct() {
        $this->documentacion = new DocumentacionPdf();
    }

    public function generaFormularioPedido(string $nombreCliente)
    {
        $documento = "<PDF>Formulario de solicitud del cliente: $nombreCliente</PDF>"; 
        $this->documentacion->agregarDocumento($documento);
    }

    public function generaSolicitudMatriculacion(string $nombreSolicitante)
    {
        $documento = "<PDF>Solicitud de matriculación - Solicitante: $nombreSolicitante</PDF>"; 
        $this->documentacion->agregarDocumento($documento); 
    }
}
