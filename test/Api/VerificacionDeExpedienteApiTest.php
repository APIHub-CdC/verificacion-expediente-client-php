<?php
namespace CirculoDeCredito\VerificacionExpediente;

use CirculoDeCredito\VerificacionExpediente\Model\VerificacionExpedienteRequest as PayloadRequest;
use CirculoDeCredito\VerificacionExpediente\Model\Personas;
use CirculoDeCredito\VerificacionExpediente\Model\Persona;
use CirculoDeCredito\VerificacionExpediente\Model\Domicilio;
use CirculoDeCredito\VerificacionExpediente\Api\ApiClient;
use CirculoDeCredito\VerificacionExpediente\Configuration;
use CirculoDeCredito\VerificacionExpediente\ApiException;
use CirculoDeCredito\VerificacionExpediente\Model\CatalogoEstados;
use CirculoDeCredito\VerificacionExpediente\Model\CatalogoSexo;
use Signer\Manager\Interceptor\MiddlewareEvents;
use Signer\Manager\Interceptor\KeyHandler;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;

class VerificacionDeExpedienteApiTest extends \PHPUnit\Framework\TestCase
{
    private $apiKey;
    private $username;
    private $password;
    private $httpClient;
    private $config;

    public function setUp(): void {

        $this->apiKey   = "";
        $this->username = "";
	$this->password = "";

	$apiUrl              = "";
        $keystorePassword    = "";
        $keystore            = "";
        $cdcCertificate      = "";

        $signer = new KeyHandler($keystore, $cdcCertificate, $keystorePassword);

        $events = new MiddlewareEvents($signer);
        $handler = HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));   
	$handler->push($events->verify_signature_header('x-signature'));

	$this->config = new Configuration();
        $this->config->setHost($apiUrl);

	$this->httpClient = new HttpClient([
	    'handler' => $handler
	]);
    }
    
    public function testGetReporte() {

        $domicilio = new Domicilio();
        $domicilio->setDireccion("");
        $domicilio->setDelegacionMunicipio("");
        $domicilio->setCiudad("");
	$domicilio->setEstado(CatalogoEstados::CDMX);
        $domicilio->setCodigoPostal("");
        $domicilio->setNumeroTelefono("");

        $persona = new Persona();
        $persona->setNombres("");
        $persona->setApellidoPaterno("");
        $persona->setApellidoMaterno("");
        $persona->setFechaNacimiento("");
        $persona->setRFC("");
        $persona->setCURP("");
        $persona->setClaveElectorIFE("");
        $persona->setSexo(CatalogoSexo::M);
        $persona->addDomicilio($domicilio);

        $personas = new Personas();
        $personas->setFolio("");
        $personas->addPersona($persona);

	$payload = new PayloadRequest();
	$payload->setPersonas($personas);
	$payload->setFolioOtorgante("");

	$response = null;

	try {
	    $client = new ApiClient($this->httpClient, $this->config);
	    $response = $client->getReporte($this->apiKey, $this->username, $this->password, $payload);

	    print("\n".$response);

	} catch (ApiException $exception) {
            print("\nThe HTTP request failed, an error ocurred: ".($exception->getMessage()));
	    print("\n".$exception->getResponseObject());
	}

	$this->assertNotNull($response);
    
    }
}

