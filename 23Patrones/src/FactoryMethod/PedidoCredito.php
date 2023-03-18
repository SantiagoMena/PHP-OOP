<?php
declare(strict_types=1);
namespace Php\Oop\FactoryMethod;

class PedidoCredito extends AbstractPedido
{
    public function pago(): void
    {
        $cantidad = number_format($this->cantidad, 2, ',', ' ');
        echo 'El pago a crédito de ' . $cantidad . ' se ha realizado.' .PHP_EOL; 
    }

    public function valida(): bool
    {
        return ($this->cantidad >= 1000 && $this->cantidad <= 5000);
    }
}
