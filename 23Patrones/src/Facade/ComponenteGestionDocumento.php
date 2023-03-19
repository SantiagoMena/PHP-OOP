<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

class ComponenteGestionDocumento implements GestionDocumentoInterfaz
{
    public function documento(int $indice): string
    {
        return "Documento número $indice de la base documental" . PHP_EOL;
    }
}