<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class Domicilios implements \JsonSerializable {

    private $list;

    public function setList(array $list): void {
        $this->list = $list;
    }

    public function addDomicilio(Domicilio $domicilio): void {
        $this->list[] = $domicilio;
    }

    public function getList(): array {
        $this->list;
    }

    public function jsonSerialize() {
        return array(
	    'list' => $this->list
	);
    }

    public function __toString(): string {
        return json_encode($this,  JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}

