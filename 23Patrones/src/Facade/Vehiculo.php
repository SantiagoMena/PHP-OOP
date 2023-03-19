<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

class Vehiculo
{
    public function __construct(
        protected string $descripcion,
        protected float $precio
    ) { }
    

    /**
     * Get the value of descripcion
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }
}