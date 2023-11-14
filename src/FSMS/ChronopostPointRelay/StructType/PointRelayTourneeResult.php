<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tourneeResult StructType
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayTourneeResult extends AbstractStructBase
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
     * The tournee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\ChronopostPointRelay\StructType\PointRelayTournee|null
     */
    protected ?\FSMS\ChronopostPointRelay\StructType\PointRelayTournee $tournee = null;
    /**
     * Constructor method for tourneeResult
     * @uses PointRelayTourneeResult::setErrorCode()
     * @uses PointRelayTourneeResult::setErrorMessage()
     * @uses PointRelayTourneeResult::setTournee()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTournee $tournee
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\FSMS\ChronopostPointRelay\StructType\PointRelayTournee $tournee = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setTournee($tournee);
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
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult
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
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult
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
     * Get tournee value
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTournee|null
     */
    public function getTournee(): ?\FSMS\ChronopostPointRelay\StructType\PointRelayTournee
    {
        return $this->tournee;
    }
    /**
     * Set tournee value
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayTournee $tournee
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayTourneeResult
     */
    public function setTournee(?\FSMS\ChronopostPointRelay\StructType\PointRelayTournee $tournee = null): self
    {
        $this->tournee = $tournee;
        
        return $this;
    }
}
