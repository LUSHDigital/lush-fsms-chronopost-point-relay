<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @package PointRelay
 * @subpackage Services
 */
class PointRelayGet extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getAllChronopostAgences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayGetAllChronopostAgences $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayGetAllChronopostAgencesResponse|bool
     */
    public function getAllChronopostAgences(\FSMS\ChronopostPointRelay\StructType\PointRelayGetAllChronopostAgences $parameters)
    {
        try {
            $this->setResult($resultGetAllChronopostAgences = $this->getSoapClient()->__soapCall('getAllChronopostAgences', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllChronopostAgences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayGetAllChronopostAgencesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
