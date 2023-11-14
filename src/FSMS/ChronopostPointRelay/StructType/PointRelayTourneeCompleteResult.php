<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tourneeCompleteResult StructType
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayTourneeCompleteResult extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The tourneeComplete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete|null
     */
    protected ?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete $tourneeComplete = null;
    /**
     * Constructor method for tourneeCompleteResult
     * @uses PointRelayTourneeCompleteResult::setErrorCode()
     * @uses PointRelayTourneeCompleteResult::setErrorMessage()
     * @uses PointRelayTourneeCompleteResult::setTourneeComplete()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete $tourneeComplete
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete $tourneeComplete = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setTourneeComplete($tourneeComplete);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get tourneeComplete value
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete|null
     */
    public function getTourneeComplete(): ?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete
    {
        return $this->tourneeComplete;
    }
    /**
     * Set tourneeComplete value
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete $tourneeComplete
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeCompleteResult
     */
    public function setTourneeComplete(?\FSMS\ChronopostPointRelay\StructType\PointRelayTourneeComplete $tourneeComplete = null): self
    {
        $this->tourneeComplete = $tourneeComplete;
        
        return $this;
    }
}
