<?php
declare(strict_types=1);
namespace Php\Oop\FactoryMethod;

class ClienteCredito extends AbstractCliente
{
    protected function creaPedido(float $cantidad): AbstractPedido
    {
        return new PedidoCredito($cantidad);
    }
}
