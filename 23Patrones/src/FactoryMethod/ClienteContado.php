<?php
declare(strict_types=1);
namespace Php\Oop\FactoryMethod;

class ClienteContado extends AbstractCliente
{
    protected function creaPedido(float $cantidad): AbstractPedido
    {
        return new PedidoContado($cantidad);
    }
}
