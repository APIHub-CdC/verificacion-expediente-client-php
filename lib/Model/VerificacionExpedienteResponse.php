<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class VerificacionExpedienteResponse implements \JsonSerializable {

    const DISCRIMINATOR = null;
    const RCCPM_MODEL_NAME = 'VerificacionExpedienteResponse';

    private static $RCCPMTypes = array(
        'personas' => '\CirculoDeCredito\VerificacionExpediente\Model\PersonasResponse'
    );

    private static $RCCPMFormats = array(
        'personas' => null
    );

    private static $attributeMap = array(
        'personas' => 'personas'    
    );

    protected static $setters = array(
        'personas' => 'setPersonas'
    );

    protected static $getters = array(
        'personas' => 'getPersonas'   
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

    private $personas = array();

    public function setPersonas(PersonasResponse $personas): void {
        $this->personas = $personas;
    }

    public function getPersonas(): PersonasResponse {
        return $this->personas;
    }

    public function jsonSerialize() {
        return array(
	    'personas' => $this->personas
	);
    }

    public function __toString(): string {
        return json_encode($this,  JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
