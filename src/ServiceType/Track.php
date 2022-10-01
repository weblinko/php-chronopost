<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track ServiceType
 * @subpackage Services
 */
class Track extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackWithSenderRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\TrackWithSenderRef $parameters
     * @return \Chronopost\StructType\TrackWithSenderRefResponse|bool
     */
    public function trackWithSenderRef(\Chronopost\StructType\TrackWithSenderRef $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->trackWithSenderRef($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\TrackSearch $parameters
     * @return \Chronopost\StructType\TrackSearchResponse|bool
     */
    public function trackSearch(\Chronopost\StructType\TrackSearch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->trackSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybillV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\TrackSkybillV2 $parameters
     * @return \Chronopost\StructType\TrackSkybillV2Response|bool
     */
    public function trackSkybillV2(\Chronopost\StructType\TrackSkybillV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->trackSkybillV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\TrackSkybill $parameters
     * @return \Chronopost\StructType\TrackSkybillResponse|bool
     */
    public function trackSkybill(\Chronopost\StructType\TrackSkybill $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->trackSkybill($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\TrackSearchResponse|\Chronopost\StructType\TrackSkybillResponse|\Chronopost\StructType\TrackSkybillV2Response|\Chronopost\StructType\TrackWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
