<?php
declare(strict_types=1);

namespace Php\Oop\AbstractFactory;

abstract class AbstractScooter
{
    public function __construct(
        protected string $marca,
        protected string $color,
        protected int $potencia,
    ) { }
}