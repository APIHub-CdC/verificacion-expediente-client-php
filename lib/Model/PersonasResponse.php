<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

class PersonasResponse implements \JsonSerializable {

    const DISCRIMINATOR = null;
    const RCCPM_MODEL_NAME = 'PersonasResponse';

    private static $RCCPMTypes = array(
        'Folio' => 'string',
        'FolioOtorgante' => 'string',
        'list' => 'object'
    );

    private static $RCCPMFormats = array(
        'Folio' => null,
        'FolioOtorgante' => null,
        'list' => null
    );

    private static $attributeMap = array(
        'Folio' => 'Folio',
        'FolioOtorgante' => 'FolioOtorgante',
        'list' => 'list'
    );

    private static $setters = array(
        'Folio' => 'setFolio',
        'FolioOtorgante' => 'setFolioOtorgante',
        'list' => 'setList'
    );

    private static $getters = array(
        'Folio' => 'getFolio',
        'FolioOtorgante' => 'getFolioOtorgante',
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

    private $Folio;
    private $FolioOtorgante;
    private $list;

    public function setFolioOtorgante(string $FolioOtorgante): void {
        $this->FolioOtorgante = $FolioOtorgante;
    }

    public function setFolio(string $Folio): void {
        $this->Folio = $Folio;
    }

    public function setList(array $list): void {
        $this->list = $list;
    }

    public function addPersona(PersonaResponse $persona): void {
        $this->list[] = $persona;
    }

    public function getFolio(): string {
        return $this->Folio;
    }

    public function getList(): array {
        return $this->list;
    }

    public function jsonSerialize() {
        return array(
	    'Folio' => $this->Folio,
	    'FolioOtorgante' => $this->FolioOtorgante,
            'list' => $this->list
        );
    }

    public function __toString(): string {
        return json_encode($this,  JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
