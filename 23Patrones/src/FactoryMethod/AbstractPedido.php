<?php
declare(strict_types=1);
namespace Php\Oop\FactoryMethod;

abstract class AbstractPedido
{
    public function __construct(protected float $cantidad) { }

    abstract public function valida(): bool;
    
    abstract public function pago(): void;
}
