<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayRechercheTourneeParTypeTourneeEtPosteComptableResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult|null
     */
    protected ?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult $return = null;
    /**
     * Constructor method for rechercheTourneeParTypeTourneeEtPosteComptableResponse
     * @uses PointRelayRechercheTourneeParTypeTourneeEtPosteComptableResponse::setReturn()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult $return
     */
    public function __construct(?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult|null
     */
    public function getReturn(): ?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult $return
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeParTypeTourneeEtPosteComptableResponse
     */
    public function setReturn(?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
