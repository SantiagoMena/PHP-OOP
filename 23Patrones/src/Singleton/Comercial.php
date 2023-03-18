<?php
declare(strict_types=1);
namespace Php\Oop\Singleton;

class Comercial
{
    private static ?self $instance = null;

    private function __construct(
        protected string $nombre,
        protected string $email
    ) { }

    public static function getInstance(string $nombre, string $email)
    {
        if(!self::$instance) {
            self::$instance = new self($nombre, $email);
        }

        return self::$instance;
    }

    public function muestra(): void
    {
        echo "Nombre: $this->nombre" . PHP_EOL 
            . "Email: $this->email" . PHP_EOL; 
    }
}