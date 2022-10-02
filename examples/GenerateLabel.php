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
use Chronopost\ServiceType\Shipping;
use Chronopost\StructType\EsdValue3;
use Chronopost\StructType\HeaderValue;
use Chronopost\StructType\ShipperValueV2;
use Chronopost\StructType\CustomerValue;
use Chronopost\StructType\RecipientValueV2;
use Chronopost\StructType\RefValue;
use Chronopost\StructType\SkybillValueV2;
use Chronopost\StructType\SkybillParamsValueV2;
use Chronopost\StructType\ScheduledValue;
use Chronopost\StructType\ShippingV6;

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
    AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/shipping-cxf/ShippingServiceWS?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);

/**
 * Example for Shipping ServiceType
 */
$shipping = new Shipping($options);

/**
 * EsdValue3
 */
$esdValue3 = new EsdValue3();
$esdValue3
    ->setClosingDateTime(date('Y-m-d 17:00:00.uZ')) // Date/heure de fermeture du lieu d'enlèvement
    ->setHeight(25) // Hauteur Colis
    ->setLength(36) // Longueur Colis
    ->setWidth(36) // Largeur Colis
    ->setRetrievalDateTime(date('Y-m-d 15:00:00.uZ'))  // Date/heure d'enlèvement souhaitée
    ->setShipperBuildingFloor(null) // N° Bâtiment/Etage d'enlèvement
    ->setShipperCarriesCode(null) // Code porte batiment d'enlèvement
    ->setShipperServiceDirection('Weblinko') // Nom Service/Direction d'enlèvement
    ->setSpecificInstructions('Atelier au RDC') // Instructions particulières pour l'enlèvement
    ->setCodeDepotColReq(null)
    ->setNumColReq(null)
    ->setLtAImprimerParChronopost(false) // 0|1 Indique si l’étiquette doit être imprimée en agence avant la réalisation de l’ESD
    ->setNombreDePassageMaximum(1) // A positionner à 1
    ->setRefEsdClient('#0000001'); // La référence client de l’ESD

/**
 * HeaderValue
 */
$headerValue = new HeaderValue();
$headerValue
    ->setAccountNumber(CHRONOPOST_WS_ACCOUNT_NUMBER)
    ->setIdEmit('CHRFR')
    ->setIdentWebPro(null)
    ->setSubAccount('001');

/**
 * ShipperValueV2
 */
$shipperValueV2 = new ShipperValueV2();
$shipperValueV2->setShipperAdress1("Adresse principal de l'expéditeur")
    ->setShipperAdress2("Complément d'adresse de l'expéditeur")
    ->setShipperCity('Paris')
    ->setShipperCivility('M')
    ->setShipperContactName('Martin Dupond') // Nom complet
    ->setShipperCountry('FR') // Code Pays
    ->setShipperCountryName('France') // Pays
    ->setShipperEmail('dupond.martin@exemple.fr')
    ->setShipperMobilePhone('0600000000')
    ->setShipperName('Martin Dupond')
    ->setShipperName2('Nom Entreprise') // Facultatif
    ->setShipperPhone('0102030405') // Téléphone
    ->setShipperPreAlert(0)
    ->setShipperZipCode('75001') // Code postal
    ->setShipperType('1'); // Type d’expéditeur 1=Pro 2=Particulier

/**
 * CustomerValue
 */
$customerValue = new CustomerValue();
$customerValue
    ->setCustomerAdress1('Adresse principal du client')
    ->setCustomerAdress2("Complément d'adresse du client")
    ->setCustomerCity('Paris')
    ->setCustomerCivility('M')
    ->setCustomerContactName('Martin Dupond') // Nom complet
    ->setCustomerCountry('FR') // Code Pays
    ->setCustomerCountryName('FRANCE') // Pays
    ->setCustomerEmail('dupond.martin@exemple.fr')
    ->setCustomerMobilePhone('0600000000') // Modile
    ->setCustomerName('Dupond') // Nom
    ->setCustomerName2('Nom Entreprise') // Facultatif
    ->setCustomerPhone('0102030405') // Téléphone
    ->setCustomerPreAlert('0') // Type de pré-alerte: Non utilisé pour le moment
    ->setCustomerZipCode('75001') // Code postal
    ->setPrintAsSender('N'); // Y=Customer N=Sender (Indique si l’adresse customer doit être imprimée à la place du sender sur l'étiquette)

/**
 * RecipientValue
 */
$recipientValue = new RecipientValueV2();
$recipientValue->setRecipientAdress1('Adresse principal de livraison')
    ->setRecipientAdress2("Complément d'adresse pour la livraison")
    ->setRecipientCity('Paris')
    ->setRecipientContactName('Dupond Martin')
    ->setRecipientCountry('FR')
    ->setRecipientCountryName('FRANCE')
    ->setRecipientEmail('dupond.martin@exemple.fr')
    ->setRecipientMobilePhone('0600000000')
    ->setRecipientName('Company Name') // Facultatif
    ->setRecipientName2(null)
    ->setRecipientPhone('0102030405')
    ->setRecipientPreAlert(22) // Type de préalerte ( MAS ) 0 : pas de préalerte | 22 : préalerte mail au destinataire
    ->setRecipientZipCode('75001')
    ->setRecipientType('1'); // 1|2 Type de destinataire 1=Pro 2=Particulier

/**
 * RefValue
 */
$refValue = new RefValue();
$refValue->setCustomerSkybillNumber('0000001') // Numéro de colis client
    ->setPCardTransactionNumber(null)
    ->setRecipientRef('#0000001') // Référence Destinataire (Champ libre)
    ->setShipperRef('#0000001'); // Référence Expéditeur (Champ libre)

/**
 * SkybillValueV2
 */
$SkybillValueV2 = new SkybillValueV2();
$SkybillValueV2->setBulkNumber('1') // Nombre total de colis
    ->setCodCurrency('EUR')
    ->setCodValue(0) // Valeur du contre remboursement
    ->setCustomsCurrency('EUR')
    ->setCustomsValue('220.00') // Valeur déclarée en douane
    ->setEvtCode('DC')
    ->setInsuredCurrency('EUR')
    ->setInsuredValue(0) // Valeur assurée en centimes d’Euros
    ->setMasterSkybillNumber('?')
    ->setObjectType('MAR') // Type de colis: DOC=Document MAR=Marchandise
    ->setPortCurrency('EUR')
    ->setPortValue(0)
    ->setProductCode('16') // 01=Chrono13|02=Chrono10|16=Chrono18|17=ChronoExpressInternational|44=ChronoClassicInternational|2R=ChronoFresh13|1S=ChronoFresh13
    ->setService(0) // 0: pas de livraison samedi | 6: livraison samedi
    ->setShipDate(date('Y-m-d H:i:s.uZ')) // Date d'expédition : Date de génération de l'envoi (date courante)
    ->setShipHour('16') // Heure d'expédition : Heure de génération de l'envoi (heure courante) ; doit être compris entre 0 et 23
    ->setSkybillRank('1')
    ->setWeight('1.6') // Poids en Kilo
    ->setWeightUnit('KGM');

/**
 * SkybillParamsValueV2
 */
$skybillParamsValueV2 = new SkybillParamsValueV2();
$skybillParamsValueV2
    ->setDuplicata('N') // Y|N Est-ce que le service doit-construire un duplicata avec la LT ?
    ->setMode('Z2D'); // PDF | Z2D | ZPL300

/**
 * ScheduledValue : facultatif
 * Paramètre inexistant dans le cas du service shipping et shippingV2
 */
$scheduledValue = new ScheduledValue();
$scheduledValue->setExpirationDate(null);
$scheduledValue->sellByDate(null);

//$appointmentValue = new AppointmentValue();
//$appointmentValue->setTimeSlotEndDate(null);
//$appointmentValue->setTimeSlotStartDate(null);
//$appointmentValue->setTimeSlotTariffLevel(null);

/**
 * ShippingV6
 */
$shippingV6 = new ShippingV6();
$shippingV6
    ->setEsdValue($esdValue3)
    ->setHeaderValue($headerValue)
    ->setShipperValue($shipperValueV2)
    ->setCustomerValue($customerValue)
    ->setRecipientValue($recipientValue)
    ->setRefValue($refValue)
    ->setSkybillValue($SkybillValueV2)
    ->setSkybillParamsValue($skybillParamsValueV2)
    ->setPassword(CHRONOPOST_WS_PASSWORD)
    ->setVersion('2.0')
    ->setScheduledValue($scheduledValue);

if($shipping->shippingV6($shippingV6)) {
    /**
     * Response
     */
    $result = $shipping->getResult();
    $return = $result->getReturn();
    $errorCode = $return->getErrorCode();
    $errorMessage = $return->getErrorMessage();

    if ($errorCode) {
        /**
         * Has Error
         * Debug des informations fournies par les méthodes utilitaires
         */
        echo 'XML Request: ' . $shipping->getLastRequest() . "\r\n";
        echo 'XML Response: ' . $shipping->getLastResponse() . "\r\n";
        echo 'XML Error: ' . $shipping->getLastError() . "\r\n";

        return false;
    } else {
        /**
         * OK : Réponse valide
         *
         * Pour étiquette ZPL
         * Si le mode SkybillParamsValueV2 est égal à : Z2D | ZPL300
         */
        $zpl_data = "CT~~CD,~CC^~CT~\n".$return->getSkybill();
        if (!empty($zpl_data)) {
            // Mon chemin pour enregistrer l'étiquette sur le serveur
            $my_file_path_and_name = 'private/chronopost/label/0000001.zpl';
            file_put_contents($my_file_path_and_name, $zpl_data);
        }

        // N° de tracking chronopost
        $skybillNumber = $return->getSkybillNumber();

        return true;
    }
}