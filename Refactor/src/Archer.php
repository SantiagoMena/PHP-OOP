<?php
namespace Source;

use Source\Weapons\Bow;

/**
 * Clase unidad de batalla tipo Arquero
 */
class Archer extends Unit
{
    public function __construct(string $name, Bow $bow) {
        parent::__construct($name, $bow);
    }
}