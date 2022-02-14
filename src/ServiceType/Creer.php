<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Creer ServiceType
 * @subpackage Services
 */
class Creer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named creerEnlevementNational
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\CreerEnlevementNational $parameters
     * @return \Chronopost\StructType\CreerEnlevementNationalResponse|bool
     */
    public function creerEnlevementNational(\Chronopost\StructType\CreerEnlevementNational $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->creerEnlevementNational($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named creerEnlevementEurope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\CreerEnlevementEurope $parameters
     * @return \Chronopost\StructType\CreerEnlevementEuropeResponse|bool
     */
    public function creerEnlevementEurope(\Chronopost\StructType\CreerEnlevementEurope $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->creerEnlevementEurope($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\CreerEnlevementEuropeResponse|\Chronopost\StructType\CreerEnlevementNationalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
