<?php

declare(strict_types=1);

namespace Chronopost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track ServiceType.
 */
class Track extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackWithSenderRef.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\TrackWithSenderRefResponse
     */
    public function trackWithSenderRef(\Chronopost\StructType\TrackWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultTrackWithSenderRef = $this->getSoapClient()->__soapCall('trackWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackWithSenderRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackSearch.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\TrackSearchResponse
     */
    public function trackSearch(\Chronopost\StructType\TrackSearch $parameters)
    {
        try {
            $this->setResult($resultTrackSearch = $this->getSoapClient()->__soapCall('trackSearch', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackSearch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackSkybillV2.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\TrackSkybillV2Response
     */
    public function trackSkybillV2(\Chronopost\StructType\TrackSkybillV2 $parameters)
    {
        try {
            $this->setResult($resultTrackSkybillV2 = $this->getSoapClient()->__soapCall('trackSkybillV2', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackSkybillV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackSkybill.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return bool|\Chronopost\StructType\TrackSkybillResponse
     */
    public function trackSkybill(\Chronopost\StructType\TrackSkybill $parameters)
    {
        try {
            $this->setResult($resultTrackSkybill = $this->getSoapClient()->__soapCall('trackSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackSkybill;
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
     * @return \Chronopost\StructType\TrackSearchResponse|\Chronopost\StructType\TrackSkybillResponse|\Chronopost\StructType\TrackSkybillV2Response|\Chronopost\StructType\TrackWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
