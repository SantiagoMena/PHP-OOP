<?php
declare(strict_types=1);
namespace Php\Oop\Adapter;

interface DocumentoInterfaz
{
    public function setContenido(string $contenido): void;
    
    public function dibuja(): void;
    
    public function imprime(): void;
}