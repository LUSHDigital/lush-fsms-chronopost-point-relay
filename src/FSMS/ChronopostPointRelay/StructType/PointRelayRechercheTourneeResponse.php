<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeResponse
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayRechercheTourneeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult|null
     */
    protected ?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult $return = null;
    /**
     * Constructor method for rechercheTourneeResponse
     * @uses PointRelayRechercheTourneeResponse::setReturn()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult $return
     */
    public function __construct(?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult|null
     */
    public function getReturn(): ?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult $return
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeResponse
     */
    public function setReturn(?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
