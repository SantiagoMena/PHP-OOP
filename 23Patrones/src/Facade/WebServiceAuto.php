<?php
declare(strict_types=1);
namespace Php\Oop\Facade;

class WebServiceAuto implements WebServiceAutoInterfaz
{
    public function __construct(
        protected CatalogoInterfaz $catalogo,
        protected GestionDocumentoInterfaz $gestionDocumento
    ) { }

    public function buscarDocumento(int $indice): string
    {
        return $this->gestionDocumento->documento(indice: $indice);
    }

    public function buscaVehiculos(float $precioMedio, int $desviacionMax): array
    {
        return $this->catalogo->encuentraVehiculos(precioMin: $precioMedio - $desviacionMax, precioMax: $precioMedio + $desviacionMax);
    }
}