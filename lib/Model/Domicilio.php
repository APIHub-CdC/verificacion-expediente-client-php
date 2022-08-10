<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class Domicilio implements \JsonSerializable {

    private $direccion;
    private $delegacionMunicipio;
    private $ciudad;
    private $estado;
    private $codigoPostal;
    private $numeroTelefono;

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    public function setDelegacionMunicipio(string $delegacionMunicipio): void {
        $this->delegacionMunicipio = $delegacionMunicipio;
    }

    public function setCiudad(string $ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function setEstado(string $estado): void {
        $this->estado = $estado;
    }

    public function setCodigoPostal(string $codigoPostal): void {
        $this->codigoPostal = $codigoPostal;
    }

    public function setNumeroTelefono(string $numeroTelefono): void {
        $this->numeroTelefono = $numeroTelefono;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function getDelegacionMunicipio(): string {
        return $this->delegacionMunicipio;
    }

    public function getCiudad(): string {
        return $this->ciudad;
    }

    public function getEstado(): string {
        return $this->estado;
    }

    public function getCodigoPostal(): string {
        return $this->codigoPostal;
    }

    public function getNumeroTelefono(): string {
        return $this->numeroTelefono;
    }

    public function jsonSerialize() {
        return array(
	    'direccion' => $this->direccion,
	    'delegacionMunicipio' => $this->delegacionMunicipio,
	    'ciudad' => $this->ciudad,
	    'estado' => $this->estado,
	    'codigoPostal' => $this->codigoPostal,
	    'numeroTelefono' => $this->numeroTelefono
        );
    }    

    public function __toString(): string {
        return json_encode($this,  JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
