<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

abstract class AbstractDocumento
{
    protected string $contenido;

    public function duplica(): self
    {
        return clone $this;
    }

    public function rellena(string $informacion): void
    {
        $this->contenido = $informacion;
    }

    abstract public function imprime(): void;

    abstract public function muestra(): void;
}
