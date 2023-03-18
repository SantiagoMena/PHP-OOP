<?php
declare(strict_types=1);
namespace Php\Oop\Decorator;

class MarcaDecorador extends AbstractDecorador
{
    public function visualiza(): void
    {
        parent::visualiza();
        $this->visualizaLogo();
    }

    protected function visualizaLogo(): void
    {
        echo 'Logotipo de la marca' . PHP_EOL; 
    }
}
