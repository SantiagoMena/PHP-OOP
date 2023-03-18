<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

abstract class AbstractDocumentacion
{
    protected array $documentos = [];

    public function getDocumentos(): array
    {
        return $this->documentos;
    }
}
