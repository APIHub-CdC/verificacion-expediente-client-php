<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class DomicilioResponse implements \JsonSerializable {

    const DISCRIMINATOR = null;
    const RCCPM_MODEL_NAME = 'DomicilioResponse';

    private static $RCCPMTypes = array(
        'direccion' => 'string',
        'delegacionMunicipio' => 'string',
        'ciudad' => 'string',
        'estado' => 'string',
        'codigoPostal' => 'string',
        'numeroTelefono' => 'string',
        'index' => 'string'
    );

    private static $RCCPMFormats = array(
        'direccion' => null,
        'delegacionMunicipio' => null,
        'ciudad' => null,
        'estado' => null,
        'codigoPostal' => null,
	'numeroTelefono' => null,
	'index' => null
    );

    private static $attributeMap = array(
        'direccion' => 'direccion',
        'delegacionMunicipio' => 'delegacionMunicipio',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'codigoPostal' => 'codigoPostal',
        'numeroTelefono' => 'numeroTelefono',
        'index' => 'index'
    );

    private static $setters = array(
        'direccion' => 'setDireccion',
        'delegacionMunicipio' => 'setDelegacionMunicipio',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'codigoPostal' => 'setCodigoPostal',
        'numeroTelefono' => 'setNumeroTelefono',
        'index' => 'setIndex'
    );

    private static $getters = array(
        'direccion' => 'getDireccion',
        'delegacionMunicipio' => 'getDelegacionMunicipio',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'codigoPostal' => 'getCodigoPostal',
        'numeroTelefono' => 'getNumeroTelefono',
        'index' => 'getIndex'
    );

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

    private $direccion;
    private $delegacionMunicipio;
    private $ciudad;
    private $estado;
    private $codigoPostal;
    private $numeroTelefono;
    private $index;

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

    public function setIndex(string $index): void {
        $this->index = $index;
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

    public function getIndex(): string {
        return $this->index;
    }

    public function jsonSerialize() {
        return array(
	    'direccion' => $this->direccion,
	    'delegacionMunicipio' => $this->delegacionMunicipio,
	    'ciudad' => $this->ciudad,
	    'estado' => $this->estado,
	    'codigoPostal' => $this->codigoPostal,
	    'numeroTelefono' => $this->numeroTelefono,
	    'index' => $this->index
        );
    }    

    public function __toString(): string {
        return json_encode($this,  JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
