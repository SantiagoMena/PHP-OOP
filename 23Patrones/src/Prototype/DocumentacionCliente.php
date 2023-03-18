<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

class DocumentacionCliente extends AbstractDocumentacion
{
    public function __construct(string $informacion) {
        $documentacionEnBlanco = DocumentacionEnBlanco::getInstance();

        foreach ($documentacionEnBlanco->getDocumentos() as $documento) {
            $copiaDocumento = $documento->duplica();
            $copiaDocumento->rellena($informacion);
            $this->documentos[] = $copiaDocumento;
        }
    }

    public function muestra(): void
    {
        foreach ($this->documentos as $documento) {
            $documento->muestra();
        }
    }

    public function imprime(): void
    {
        foreach ($this->documentos as $documento) {
            $documento->imprime();
        }
    }
}
