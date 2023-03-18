<?php
declare(strict_types=1); 
namespace Php\Oop\Builder;

class DocumentacionPdf extends AbstractDocumentacion
{
    public function agregarDocumento(string $documento): void
    {
        if(str_starts_with($documento, '<PDF>')) {
            $this->contenido[] = $documento;
        }
    }

    public function imprime(): void
    {
        echo 'Documentación PDF'. PHP_EOL;

        foreach ($this->contenido as $linea) {
            echo $linea . PHP_EOL;
        }
    }
}