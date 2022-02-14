<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rechercher ServiceType
 * @subpackage Services
 */
class Rechercher extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named rechercherContraintesEnlevement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\RechercherContraintesEnlevement $parameters
     * @return \Chronopost\StructType\RechercherContraintesEnlevementResponse|bool
     */
    public function rechercherContraintesEnlevement(\Chronopost\StructType\RechercherContraintesEnlevement $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->rechercherContraintesEnlevement($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\RechercherContraintesEnlevementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
