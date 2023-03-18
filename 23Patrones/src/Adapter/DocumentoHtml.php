<?php
declare(strict_types=1);
namespace Php\Oop\Adapter;

class DocumentoHtml implements DocumentoInterfaz
{
    protected string $contenido;

    public function setContenido(string $contenido): void
    {
        $this->contenido = $contenido;
    }

    public function dibuja(): void
    {
        echo "Dibuja documento HTML: $this->contenido" . PHP_EOL; 
    }

    public function imprime(): void
    {
        echo "Imprime documento HTML: $this->contenido" . PHP_EOL; 
    }
}