<?php

namespace Chronopost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Shipping ServiceType
 * @subpackage Services
 */
class Shipping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named shippingV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingV2 $parameters
     * @return \Chronopost\StructType\ShippingV2Response|bool
     */
    public function shippingV2(\Chronopost\StructType\ShippingV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingV3 $parameters
     * @return \Chronopost\StructType\ShippingV3Response|bool
     */
    public function shippingV3(\Chronopost\StructType\ShippingV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcel $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelResponse|bool
     */
    public function shippingMultiParcel(\Chronopost\StructType\ShippingMultiParcel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnlyV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingWithESDOnlyV2 $parameters
     * @return \Chronopost\StructType\ShippingWithESDOnlyV2Response|bool
     */
    public function shippingWithESDOnlyV2(\Chronopost\StructType\ShippingWithESDOnlyV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingWithESDOnlyV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingWithReservationV2 $parameters
     * @return \Chronopost\StructType\ShippingWithReservationV2Response|bool
     */
    public function shippingWithReservationV2(\Chronopost\StructType\ShippingWithReservationV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingWithReservationV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shipping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\Shipping $parameters
     * @return \Chronopost\StructType\ShippingResponse|bool
     */
    public function shipping(\Chronopost\StructType\Shipping $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shipping($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcelWithReservation $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationResponse|bool
     */
    public function shippingMultiParcelWithReservation(\Chronopost\StructType\ShippingMultiParcelWithReservation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcelWithReservation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcelV4 $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelV4Response|bool
     */
    public function shippingMultiParcelV4(\Chronopost\StructType\ShippingMultiParcelV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcelV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcelV5 $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelV5Response|bool
     */
    public function shippingMultiParcelV5(\Chronopost\StructType\ShippingMultiParcelV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcelV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcelWithReservationV3 $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3Response|bool
     */
    public function shippingMultiParcelWithReservationV3(\Chronopost\StructType\ShippingMultiParcelWithReservationV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcelWithReservationV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcelV2 $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelV2Response|bool
     */
    public function shippingMultiParcelV2(\Chronopost\StructType\ShippingMultiParcelV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcelV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingV6 $parameters
     * @return \Chronopost\StructType\ShippingV6Response|bool
     */
    public function shippingV6(\Chronopost\StructType\ShippingV6 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingV6($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithReservation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingWithReservation $parameters
     * @return \Chronopost\StructType\ShippingWithReservationResponse|bool
     */
    public function shippingWithReservation(\Chronopost\StructType\ShippingWithReservation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingWithReservation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingV7 $parameters
     * @return \Chronopost\StructType\ShippingV7Response|bool
     */
    public function shippingV7(\Chronopost\StructType\ShippingV7 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingV7($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClient
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingWithReservationAndESDWithRefClient $parameters
     * @return \Chronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClient(\Chronopost\StructType\ShippingWithReservationAndESDWithRefClient $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingWithReservationAndESDWithRefClient($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingV4 $parameters
     * @return \Chronopost\StructType\ShippingV4Response|bool
     */
    public function shippingV4(\Chronopost\StructType\ShippingV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingV5 $parameters
     * @return \Chronopost\StructType\ShippingV5Response|bool
     */
    public function shippingV5(\Chronopost\StructType\ShippingV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingWithReservationAndESDWithRefClientPC
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters
     * @return \Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|bool
     */
    public function shippingWithReservationAndESDWithRefClientPC(\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPC $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingWithReservationAndESDWithRefClientPC($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * shippingMultiParcelWithReservationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcelWithReservationV2 $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV2Response|bool
     */
    public function shippingMultiParcelWithReservationV2(\Chronopost\StructType\ShippingMultiParcelWithReservationV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcelWithReservationV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingWithESDOnly
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingWithESDOnly $parameters
     * @return \Chronopost\StructType\ShippingWithESDOnlyResponse|bool
     */
    public function shippingWithESDOnly(\Chronopost\StructType\ShippingWithESDOnly $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingWithESDOnly($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named shippingMultiParcelV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Chronopost\StructType\ShippingMultiParcelV3 $parameters
     * @return \Chronopost\StructType\ShippingMultiParcelV3Response|bool
     */
    public function shippingMultiParcelV3(\Chronopost\StructType\ShippingMultiParcelV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->shippingMultiParcelV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Chronopost\StructType\ShippingMultiParcelResponse|\Chronopost\StructType\ShippingMultiParcelV2Response|\Chronopost\StructType\ShippingMultiParcelV3Response|\Chronopost\StructType\ShippingMultiParcelV4Response|\Chronopost\StructType\ShippingMultiParcelV5Response|\Chronopost\StructType\ShippingMultiParcelWithReservationResponse|\Chronopost\StructType\ShippingMultiParcelWithReservationV2Response|\Chronopost\StructType\ShippingMultiParcelWithReservationV3Response|\Chronopost\StructType\ShippingResponse|\Chronopost\StructType\ShippingV2Response|\Chronopost\StructType\ShippingV3Response|\Chronopost\StructType\ShippingV4Response|\Chronopost\StructType\ShippingV5Response|\Chronopost\StructType\ShippingV6Response|\Chronopost\StructType\ShippingV7Response|\Chronopost\StructType\ShippingWithESDOnlyResponse|\Chronopost\StructType\ShippingWithESDOnlyV2Response|\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientPCResponse|\Chronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse|\Chronopost\StructType\ShippingWithReservationResponse|\Chronopost\StructType\ShippingWithReservationV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
