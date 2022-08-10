<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class VerificacionExpedienteRequest implements \JsonSerializable {

    private $FolioOtorgante;
    private $personas;

    public function setFolioOtorgante(string $FolioOtorgante): void {
        $this->FolioOtorgante = $FolioOtorgante;
    }

    public function setPersonas(Personas $personas): void {
        $this->personas = $personas;
    }

    public function getFolioOtorgante(): string {
        return $this->FolioOtorgante;
    }

    public function getPersonas(): Personas {
        return $this->personas;
    }

    public function jsonSerialize() {
        return array(
	    'FolioOtorgante' => $this->FolioOtorgante,
	    'personas' => $this->personas
	);
    }

    public function __toString(): string {
        return json_encode($this,  JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
