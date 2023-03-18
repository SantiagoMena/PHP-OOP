<?php
declare(strict_types=1);
namespace Php\Oop\Prototype;

class DocumentacionEnBlanco extends AbstractDocumentacion
{
    private static ?self $instance = null;

    public static function getInstance(): self
    {
        if(!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function agrega(AbstractDocumento $documento): void
    {
        $this->documentos[] = $documento;
    }

    public function elimina(AbstractDocumento $documento): void
    {
        if(false !== ($index = array_search($documento, $this->documentos, true))) {
            unset($this->documentos[$index]);
        }
    }
}
