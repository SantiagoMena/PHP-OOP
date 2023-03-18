<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

class CertificadoCesion extends AbstractDocumento
{
    public function muestra(): void
    {
        echo "Muestra el certificado de cesión: $this->contenido" . PHP_EOL; 
    }

    public function imprime(): void
    {
        echo "Imprime el certificado de cesión: $this->contenido" . PHP_EOL; 
    }
}
