<?php
declare(strict_types=1);
namespace Php\Oop\Adapter;

class ComponentePdf
{
    protected string $contenido;

    public function pdfFijaContenido(string $contenido): void
    {
        $this->contenido = $contenido;
    }

    public function prepararVisualizacion(): void
    {
        echo 'Visualiza PDF: Comienzo' . PHP_EOL; 
    }

    public function pdfRefresca(): void
    {
        echo "Visualiza contenido PDF: $this->contenido" . PHP_EOL; 
    }
 
    public function pdfTerminaVisualizacion(): void 
    { 
        echo 'Visualiza PDF: Fin' . PHP_EOL; 
    } 
  
    public function pdfEnviaImpresora(): void 
    { 
        echo "Impresión PDF: $this->contenido" . PHP_EOL; 
    } 
}
