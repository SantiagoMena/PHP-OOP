<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

interface GestionDocumentoInterfaz
{
    public function documento(int $indice): string;
}