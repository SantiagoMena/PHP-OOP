<?php
declare(strict_types=1);
namespace Php\Oop\Bridge;

abstract class AbstractFormularioMatriculacion
{
    protected string $contenido;

    public function __construct(protected FormularioInterfaz $implantacion) { }

    public function muestra(): void
    {
        $this->implantacion->dibujaTexto("número de matriculación existente ({$this->getLimite()}) : ");
    }

    public function generaDocumento(): void
    {
        $this->implantacion->dibujaTexto('Solicitud de matriculación'); 
        $this->implantacion->dibujaTexto("Número de matrícula: $this->contenido"); 
    }

    public function administracionZona(): bool
    {
        $this->contenido = $this->implantacion->administraZonaIndicada();

        return $this->controlaZona($this->contenido);
    }
 
    abstract protected function controlaZona(string $matricula): bool; 
  
    abstract protected function getLimite(): string; 
}