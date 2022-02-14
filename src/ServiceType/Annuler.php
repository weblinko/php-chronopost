<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Annuler ServiceType
 * @subpackage Services
 */
class Annuler extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named annulerEnlevements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\AnnulerEnlevements $parameters
     * @return \Chronopost\StructType\AnnulerEnlevementsResponse|bool
     */
    public function annulerEnlevements(\Chronopost\StructType\AnnulerEnlevements $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->annulerEnlevements($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\AnnulerEnlevementsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
