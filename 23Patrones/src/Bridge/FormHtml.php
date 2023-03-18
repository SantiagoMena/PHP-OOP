<?php
declare(strict_types=1);
namespace Php\Oop\Bridge;

class FormHtml implements FormularioInterfaz
{
    public function dibujaTexto(string $texto): void
    {
        echo "HTML: $texto" . PHP_EOL; 
    }

    public function administraZonaIndicada(): string
    {
        $fp = fopen("php://stdin", 'r');
        $line = rtrim(fgets($fp, 1024));

        return $line;
    }
}