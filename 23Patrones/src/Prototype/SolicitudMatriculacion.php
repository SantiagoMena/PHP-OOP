<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

class SolicitudMatriculacion extends AbstractDocumento
{
    public function muestra(): void
    {
        echo "Muestra la solicitud de matriculación: $this->contenido" . PHP_EOL; 
    }

    public function imprime(): void
    {
        echo "Imprime la solicitud de matriculación: $this->contenido" . PHP_EOL; 
    }
}
