<?php
declare(strict_types=1);
namespace Php\Oop\Bridge;

class FormMatriculacionPortugal extends AbstractFormularioMatriculacion
{
    protected const NUM_CARACTERES = 5;

    public function __construct(FormularioInterfaz $implantacion) {
        parent::__construct($implantacion);
    }

    protected function controlaZona(string $matricula): bool
    {
        return strlen(trim($matricula)) === self::NUM_CARACTERES;
    }

    protected function getLimite(): string
    {
        return self::NUM_CARACTERES . ' caracteres.';
    }
}
