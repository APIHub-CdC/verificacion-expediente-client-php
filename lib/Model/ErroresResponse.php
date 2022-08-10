<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class ErroresResponse implements \JsonSerializable
{

    const DISCRIMINATOR = null;
    const RCCPM_MODEL_NAME = 'ErroresResponse';

    private static $RCCPMTypes = array(
        'errores' => 'object'
    );

    private static $RCCPMFormats = array(
        'errores' => null
    );

    private static $attributeMap = array(
        'errores' => 'errores'
    );

    private static $setters = array(
        'errores' => 'setErrores'
    );

    private static $getters = array(
        'errores' => 'getErrores'    
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

    private $errores = array();

    public function setErrores(array $errores): void {
        $this->errores = $errores;
    }

    public function getErrores(): array {
        return $this->errores;
    }

    public function jsonSerialize() {
        return array(
            'errores' => $this->errores
        );
    }

    public function __toString(): string {
        return json_encode($this,  JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}

