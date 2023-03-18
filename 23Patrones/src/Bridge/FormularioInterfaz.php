<?php
declare(strict_types=1);
namespace Php\Oop\Bridge;

interface FormularioInterfaz
{
    public function dibujaTexto(string $texto): void;

    public function administraZonaIndicada(): string;
}