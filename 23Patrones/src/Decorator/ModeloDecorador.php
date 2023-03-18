<?php
declare(strict_types=1);
namespace Php\Oop\Decorator;

class ModeloDecorador extends AbstractDecorador
{
    public function visualiza(): void
    {
        parent::visualiza();
        $this->visualizaInformacionTecnica();
    }

    protected function visualizaInformacionTecnica(): void
    {
        echo 'Información técnica del modelo' . PHP_EOL; 
    }
}
