<?php
declare(strict_types=1);
namespace Php\Oop\Decorator;

abstract class AbstractDecorador implements ComponenteGraficoVehiculoInterfaz
{
    public function __construct(protected ComponenteGraficoVehiculoInterfaz $componente) { }

    public function visualiza(): void
    {
        $this->componente->visualiza();
    }
}
