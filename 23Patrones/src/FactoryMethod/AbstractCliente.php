<?php
declare(strict_types=1);
namespace Php\Oop\FactoryMethod;

abstract class AbstractCliente
{
    protected array $pedidos;

    public function nuevoPedido(float $cantidad): void
    {
        $pedido = $this->creaPedido($cantidad);

        if($pedido->valida()) {
            $pedido->pago();
            $this->pedidos[] = $pedido;
        }
    }

    abstract protected function creaPedido(float $cantidad): AbstractPedido;
}
