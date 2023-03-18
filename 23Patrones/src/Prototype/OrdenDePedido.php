<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

class OrdenDePedido extends AbstractDocumento
{
    public function muestra(): void
    {
        echo "Muestra el formulario de pedido: $this->contenido" . PHP_EOL; 
    }

    public function imprime(): void
    {
        echo "Imprime el formulario de pedido: $this->contenido" . PHP_EOL; 
    }
}
