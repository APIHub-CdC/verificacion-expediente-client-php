<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class Persona implements \JsonSerializable{

    private $ocurrioError = false;
    private $descripcionError;
    private $nombres;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $fechaNacimiento;
    private $RFC;
    private $CURP;
    private $claveElectorIFE;
    private $sexo;
    private $domicilios;

    public function setOcurrioError(bool $ocurrioError): void {
        $this->ocurrioError = $ocurrioError;
    }

    public function setDescripcionError(string $descripcionError): void {
        $this->descripcionError = $descripcionError;
    }

    public function setNombres(string $nombres): void {
        $this->nombres = $nombres;
    }

    public function setApellidoPaterno(string $apellidoPaterno): void {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    public function setApellidoMaterno(string $apellidoMaterno): void {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    public function setFechaNacimiento(string $fechaNacimiento): void {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setRFC(string $RFC): void {
        $this->RFC = $RFC;
    }

    public function setCURP(string $CURP): void {
        $this->CURP = $CURP;
    }

    public function setClaveElectorIFE(string $claveElectorIFE): void {
        $this->claveElectorIFE = $claveElectorIFE;
    }

    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }

    public function setDomicilios(Domicilios $domicilios): void {
        $this->domicilios = $domicilios;
    }

    public function addDomicilio(Domicilio $domicilio): void {
        if ($this->domicilios === null || !isset($this->domicilios)) {
	    $this->domicilios = new Domicilios();
	}

	$this->domicilios->addDomicilio($domicilio);
    }

    public function getOcurrioError(): bool {
        return $this->ocurrioError;
    }

    public function getDescripcionError(): string {
        return $this->descripcionError;
    }

    public function getNombres(): string {
        return $this->nombres;
    }

    public function getApellidoPaterno(): string {
        return $this->apellidoPaterno;
    }

    public function getApellidoMaterno(): string {
        return $this->apellidoMaterno;
    }

    public function getFechaNacimiento(): string {
        return $this->fechaNacimiento;
    }

    public function getRFC(): string {
        return $this->RFC;
    }

    public function getCURP(): string {
        return $this->CURP;
    }

    public function getClaveElectorIFE(): string {
        return $this->ClaveElectorIFE;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function getDomicilios(): Domicilios {
        return $this->domicilios;
    }

    public function jsonSerialize() {
        return array(
            'ocurrioError' => $this->ocurrioError,
	    'descripcionError' => $this->descripcionError,
	    'nombres' => $this->nombres,
	    'apellidoPaterno' => $this->apellidoPaterno,
	    'apellidoMaterno' => $this->apellidoMaterno,
	    'fechaNacimiento' => $this->fechaNacimiento,
	    'RFC' => $this->RFC,
	    'CURP' => $this->CURP,
	    'claveElectorIFE' => $this->claveElectorIFE,
	    'sexo' => $this->sexo,
	    'domicilios' => $this->domicilios
        );
    }

    public function __toString(): string {
        return json_encode($this,  JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}

