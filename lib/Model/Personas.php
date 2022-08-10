<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class Personas implements \JsonSerializable {

    private $Folio;
    private $list;

    public function setFolio(string $Folio): void {
        $this->Folio = $Folio;
    }

    public function setList(array $list): void {
        $this->list = $list;
    }

    public function addPersona(Persona $persona): void {
        $this->list[] = $persona;
    }

    public function getFolio(): string {
        return $this->Folio;
    }

    public function getList(): array {
        return $this->list;
    }

    public function jsonSerialize() {
        return array(
            'Folio' => $this->Folio,
            'list' => $this->list
        );
    }

    public function __toString(): string {
        return json_encode($this,  JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
