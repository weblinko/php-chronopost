<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Faisabilite ServiceType
 * @subpackage Services
 */
class Faisabilite extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named faisabiliteESD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\FaisabiliteESD $parameters
     * @return \Chronopost\StructType\FaisabiliteESDResponse|bool
     */
    public function faisabiliteESD(\Chronopost\StructType\FaisabiliteESD $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->faisabiliteESD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\FaisabiliteESDResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
