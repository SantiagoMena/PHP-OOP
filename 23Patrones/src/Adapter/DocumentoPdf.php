<?php
declare(strict_types=1);
namespace Php\Oop\Adapter;

class DocumentoPdf implements DocumentoInterfaz
{
    protected ComponentePdf $herramientaPdf;

    public function __construct() {
        $this->herramientaPdf = new ComponentePdf();
    }

    public function setContenido(string $contenido): void
    {
        $this->herramientaPdf->pdfFijaContenido($contenido);
    }

    public function dibuja(): void
    {
        $this->herramientaPdf->prepararVisualizacion();
        $this->herramientaPdf->pdfRefresca();
        $this->herramientaPdf->pdfTerminaVisualizacion();
    }

    public function imprime(): void
    {
        $this->herramientaPdf->pdfEnviaImpresora();
    }
}
