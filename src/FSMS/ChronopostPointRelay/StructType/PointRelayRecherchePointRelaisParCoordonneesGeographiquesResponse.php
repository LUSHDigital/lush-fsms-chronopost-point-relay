<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointRelaisParCoordonneesGeographiquesResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointRelaisParCoordonneesGeographiquesResponse
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayRecherchePointRelaisParCoordonneesGeographiquesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult|null
     */
    protected ?\FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult $return = null;
    /**
     * Constructor method for recherchePointRelaisParCoordonneesGeographiquesResponse
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesResponse::setReturn()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult $return
     */
    public function __construct(?\FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult|null
     */
    public function getReturn(): ?\FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult $return
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesResponse
     */
    public function setReturn(?\FSMS\ChronopostPointRelay\StructType\PointRelayPointCHRResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
