<?php
namespace CirculoDeCredito\VerificacionExpediente\Model;

use \VerificacionExpedienteClientPhp\Client\ObjectSerializer;

class CatalogoSexo
{
    
    const F = 'F';
    const M = 'M';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::F,
            self::M,
        ];
    }
}
