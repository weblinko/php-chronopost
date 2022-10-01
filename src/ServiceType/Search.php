<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named searchPOD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\SearchPOD $parameters
     * @return \Chronopost\StructType\SearchPODResponse|bool
     */
    public function searchPOD(\Chronopost\StructType\SearchPOD $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchPOD($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPODWithSenderRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\SearchPODWithSenderRef $parameters
     * @return \Chronopost\StructType\SearchPODWithSenderRefResponse|bool
     */
    public function searchPODWithSenderRef(\Chronopost\StructType\SearchPODWithSenderRef $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->searchPODWithSenderRef($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\SearchPODResponse|\Chronopost\StructType\SearchPODWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
