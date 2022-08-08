<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class ErrorResponse implements \JsonSerializable {

    const DISCRIMINATOR = null;
    const RCCPM_MODEL_NAME = 'ErrorResponse';

    private static $RCCPMTypes = array(
        'codigo' => 'string',
        'mensaje' => 'string'
    );

    private static $RCCPMFormats = array(
        'codigo' => null,
        'mensaje' => null
    );

    private static $attributeMap = array(
	'codigo' => 'codigo',
        'mensaje' => 'mensaje'
    );

    private static $setters = array(
        'codigo' => 'setCodigo',
        'mensaje' => 'setMensaje' 
    );

    private static $getters = array(
        'codigo' => 'getCodigo',
        'mensaje' => 'getMensaje'
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

    private $codigo;
    private $mensaje;

    public function setCodigo(string $codigo): void {
        $this->codigo = $codigo;
    }

    public function setMensaje(string $mensaje): void {
        $this->mensaje = $mensaje;
    }

    public function getCodigo(): string {
        return $this->codigo;
    }

    public function getMensaje(): string {
        return $this->mensaje;
    }

    public function jsonSerialize() {
        return array(
	    'codigo' => $this->codigo,
	    'mensaje' => $this->mensaje
        );
    }

    public function __toString(): string {
        return json_encode($this,  JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
