<?php

declare(strict_types=1);

namespace Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType.
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named searchPOD.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\SearchPODResponse
     */
    public function searchPOD(\Chronopost\StructType\SearchPOD $parameters)
    {
        try {
            $this->setResult($resultSearchPOD = $this->getSoapClient()->__soapCall('searchPOD', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSearchPOD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named searchPODWithSenderRef.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\SearchPODWithSenderRefResponse
     */
    public function searchPODWithSenderRef(\Chronopost\StructType\SearchPODWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultSearchPODWithSenderRef = $this->getSoapClient()->__soapCall('searchPODWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSearchPODWithSenderRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Chronopost\StructType\SearchPODResponse|\Chronopost\StructType\SearchPODWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
