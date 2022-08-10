<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class DomiciliosResponse implements \JsonSerializable {

    const DISCRIMINATOR = null;
    const RCCPM_MODEL_NAME = 'DomiciliosResponse';

    private static $RCCPMTypes = array(
        'list' => 'object'
    );

    private static $RCCPMFormats = array(
        'list' => null
    );

    private static $attributeMap = array(
        'list' => 'list'
    );

    private static $setters = array(
        'list' => 'setList'
    );

    private static $getters = array(
        'list' => 'getList'
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

    private $list;

    public function setList(array $list): void {
        $this->list = $list;
    }

    public function addDomicilio(DomicilioResponse $domicilio): void {
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

