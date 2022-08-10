<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class PersonaResponse implements \JsonSerializable{

    const DISCRIMINATOR = null;
    const RCCPM_MODEL_NAME = 'PersonaResponse';

    private static $RCCPMTypes = array(
        'ocurrioError' => 'string',
        'descripcionError' => 'bool',
        'nombres' => 'string',
        'apellidoPaterno' => 'string',
        'apellidoMaterno' => 'string',
        'fechaNacimiento' => 'string',
        'RFC' => 'string',
        'CURP' => 'string',
        'claveElectorIFE' => 'string',
        'sexo' => 'string',
        'domicilios' => '\CirculoDeCredito\VerificacionExpediente\Model\DomiciliosResponse',
        'index' => 'string'
    );

    private static $RCCPMFormats = array(
        'ocurrioError' => null,
        'descripcionError' => null,
        'nombres' => null,
        'apellidoPaterno' => null,
        'apellidoMaterno' => null,
        'fechaNacimiento' => null,
        'RFC' => null,
        'CURP' => null,
        'claveElectorIFE' => null,
        'sexo' => null,
        'domicilios' => null,
        'index' => null
    );

    private static $attributeMap = array(
        'ocurrioError' => 'ocurrioError',
        'descripcionError' => 'descripcionError',
        'nombres' => 'setNombres',
        'apellidoPaterno' => 'apellidoPaterno',
        'apellidoMaterno' => 'apellidoMaterno',
        'fechaNacimiento' => 'fechaNacimiento',
        'RFC' => 'RFC',
        'CURP' => 'CURP',
        'claveElectorIFE' => 'claveElectorIFE',
        'sexo' => 'sexo',
        'domicilios' => 'domicilios',
        'index' => 'index'
    );

    private static $setters = array(
        'ocurrioError' => 'setOcurrioError',
        'descripcionError' => 'setDescripcionError',
        'nombres' => 'setNombres',
        'apellidoPaterno' => 'setApellidoPaterno',
        'apellidoMaterno' => 'setApellidoMaterno',
        'fechaNacimiento' => 'setFechaNacimiento',
        'RFC' => 'setRFC',
        'CURP' => 'setCURP',
        'claveElectorIFE' => 'setClaveElectorIFE',
        'sexo' => 'setSexo',
        'domicilios' => 'setDomicilios',
        'index' => 'setIndex'
    );

    private static $getters = array(
        'ocurrioError' => 'getOcurrioError',
        'descripcionError' => 'getDescripcionError',
        'nombres' => 'getNombres',
        'apellidoPaterno' => 'getApellidoPaterno',
        'apellidoMaterno' => 'getApellidoMaterno',
        'fechaNacimiento' => 'getFechaNacimiento',
        'RFC' => 'getRFC',
        'CURP' => 'getCURP',
        'claveElectorIFE' => 'getClaveElectorIFE',
        'sexo' => 'getSexo',
        'domicilios' => 'getDomicilios',
        'index' => 'getIndex'
    );

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
    private $index;

    public static function RCCPMTypes() {
        return self::$RCCPMTypes;
    }

    public static function RCCPMFormats() {
        return self::$RCCPMFormats;
    }

    public static function attributeMap() {
        return self::$attributeMap;
    }

    public static function setters() {
        return self::$setters;
    }

    public static function getters() {
        return self::$getters;
    }

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

    public function setIndex(string $index): void {
        $this->index = $index;
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

    public function getIndex(): string {
        return $this->index;
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
	    'domicilios' => $this->domicilios,
	    'index' => $this->index
        );
    }

    public function __toString(): string {
        return json_encode($this,  JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}

