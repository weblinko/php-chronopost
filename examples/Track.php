<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use Chronopost\ClassMap;
use Chronopost\ServiceType\Track;
use Chronopost\ServiceType\TrackSkybill;

/**
 * Your Chronopost account number
 */
define('CHRONOPOST_WS_ACCOUNT_NUMBER', '******');
/**
 * Your Chronopost password
 */
define('CHRONOPOST_WS_PASSWORD', '************');

/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);

/**
 * Example for Track ServiceType
 */
$track = new Track($options);

/**
 * TrackSkybill
 */
$trackSkybill = new TrackSkybill();
$trackSkybill->setLanguage('fr_FR');
$trackSkybill->setSkybillNumber('XT000000000FR'); // N° de tracking chronopost de la commande

if ($track->trackSkybill($trackSkybill)) {

    /**
     * \Chronopost\StructType\TrackSkybillResponse
     */
    $response = $track->getResult();
    $return = $response->getReturn();

    /**
     *  ERROR CODES :
     *  ----------------
     *  0 Pas d’erreur
     *  1 System Error : Une erreur système est survenue.
     *  2 le colis n’appartient pas au contrat passé en paramètre
     */
    if ($return->getErrorCode()) {
        /**
         * Has Error
         * Debug des informations fournies par les méthodes utilitaires
         */
        echo 'XML Request: ' . $track->getLastRequest() . "\r\n";
        echo 'XML Response: ' . $track->getLastResponse() . "\r\n";
        echo 'XML Error: ' . $track->getLastError() . "\r\n";

        return false;
    }

    /**
     * List Events
     * Retourne tous les évènements de la livraison
     */
    $listEvents = $return->getListEvents();
    foreach ($listEvents->getEvents() as $listEvent) {
        /**
         *  EVENTS CODES : (Liste non exhaustive)
         *  ----------------
         *  DC : Colis prêt chez l'expéditeur
         *  PC : Colis pris en charge chez l'expéditeur
         *  I  : Colis en attente
         *  O  : Colis en cours d'acheminement
         *  TS : Colis en cours d'acheminement
         *  RO : Colis reconditionné pendant l'acheminement
         *  EC : Tri effectué dans l'agence de départ
         *  SC : Tri effectué dans l'agence de départ
         *  SD : Tri effectué dans l'agence de distribution
         *  CL : Instruction de livraison reçue
         *  SM : Destinataire informé par SMS ou mail
         *  AT : Colis retardé durant l'acheminement
         *  IS : Livraison prévue lundi prochain
         *  TA : Colis en cours de livraison
         *  IS : Livraison prévue lundi prochain
         *  RB : Colis en cours de livraison au point de retrait
         *  AB : Colis mis à disposition au point de retrait
         *  SM : Destinataire informé par SMS ou mail
         *  RI : Colis remis au destinataire au point de retrait.
         *  TT : Colis livré au transitaire.
         *  D  : Livraison effectuée.
         */
        $eventCode = $listEvent->getCode();
        $eventDate = $listEvent->getEventDate();
        $eventLibelle = $listEvent->getEventLabel();


        return true;
    }
}