<?php 
 
declare(strict_types=1); 
namespace Php\Oop\Builder;

abstract class AbstractDocumentacion
{
    protected array $contenido;

    abstract public function agregarDocumento(string $documento): void;
    abstract public function imprime(): void;
}
