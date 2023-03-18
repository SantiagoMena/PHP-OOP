<?php
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

abstract class AbstractAutomovil
{
    public function __construct(
        protected string $marca,
        protected string $color,
        protected int $potencia,
        protected float $espacio,
    ) { }
}