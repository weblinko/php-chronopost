<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getReservedSkybillWithType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\GetReservedSkybillWithType $parameters
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeResponse|bool
     */
    public function getReservedSkybillWithType(\Chronopost\StructType\GetReservedSkybillWithType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getReservedSkybillWithType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeAuth
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeAuth(\Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuth $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getReservedSkybillWithTypeAndModeAuth($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getReservedSkybillWithTypeAndModeByReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|bool
     */
    public function getReservedSkybillWithTypeAndModeByReservation(\Chronopost\StructType\GetReservedSkybillWithTypeAndModeByReservation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getReservedSkybillWithTypeAndModeByReservation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\GetReservedSkybill $parameters
     * @return \Chronopost\StructType\GetReservedSkybillResponse|bool
     */
    public function getReservedSkybill(\Chronopost\StructType\GetReservedSkybill $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getReservedSkybill($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReservedSkybillWithTypeAndMode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\GetReservedSkybillWithTypeAndMode $parameters
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeResponse|bool
     */
    public function getReservedSkybillWithTypeAndMode(\Chronopost\StructType\GetReservedSkybillWithTypeAndMode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getReservedSkybillWithTypeAndMode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShippingInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\GetShippingInformation $parameters
     * @return \Chronopost\StructType\GetShippingInformationResponse|bool
     */
    public function getShippingInformation(\Chronopost\StructType\GetShippingInformation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getShippingInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRouting
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\GetRouting $parameters
     * @return \Chronopost\StructType\GetRoutingResponse|bool
     */
    public function getRouting(\Chronopost\StructType\GetRouting $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRouting($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\GetReservedSkybillResponse|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuthResponse|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse|\Chronopost\StructType\GetReservedSkybillWithTypeAndModeResponse|\Chronopost\StructType\GetReservedSkybillWithTypeResponse|\Chronopost\StructType\GetRoutingResponse|\Chronopost\StructType\GetShippingInformationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
