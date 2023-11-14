<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bureauDeTabacAvecCoord StructType
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayBureauDeTabacAvecCoord extends PointRelayBureauDeTabac
{
    /**
     * The coordGeoLatitude
     * @var float|null
     */
    protected ?float $coordGeoLatitude = null;
    /**
     * The coordGeoLongitude
     * @var float|null
     */
    protected ?float $coordGeoLongitude = null;
    /**
     * The urlGoogleMaps
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $urlGoogleMaps = null;
    /**
     * Constructor method for bureauDeTabacAvecCoord
     * @uses PointRelayBureauDeTabacAvecCoord::setCoordGeoLatitude()
     * @uses PointRelayBureauDeTabacAvecCoord::setCoordGeoLongitude()
     * @uses PointRelayBureauDeTabacAvecCoord::setUrlGoogleMaps()
     * @param float $coordGeoLatitude
     * @param float $coordGeoLongitude
     * @param string $urlGoogleMaps
     */
    public function __construct(?float $coordGeoLatitude = null, ?float $coordGeoLongitude = null, ?string $urlGoogleMaps = null)
    {
        $this
            ->setCoordGeoLatitude($coordGeoLatitude)
            ->setCoordGeoLongitude($coordGeoLongitude)
            ->setUrlGoogleMaps($urlGoogleMaps);
    }
    /**
     * Get coordGeoLatitude value
     * @return float|null
     */
    public function getCoordGeoLatitude(): ?float
    {
        return $this->coordGeoLatitude;
    }
    /**
     * Set coordGeoLatitude value
     * @param float $coordGeoLatitude
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayBureauDeTabacAvecCoord
     */
    public function setCoordGeoLatitude(?float $coordGeoLatitude = null): self
    {
        // validation for constraint: float
        if (!is_null($coordGeoLatitude) && !(is_float($coordGeoLatitude) || is_numeric($coordGeoLatitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($coordGeoLatitude, true), gettype($coordGeoLatitude)), __LINE__);
        }
        $this->coordGeoLatitude = $coordGeoLatitude;
        
        return $this;
    }
    /**
     * Get coordGeoLongitude value
     * @return float|null
     */
    public function getCoordGeoLongitude(): ?float
    {
        return $this->coordGeoLongitude;
    }
    /**
     * Set coordGeoLongitude value
     * @param float $coordGeoLongitude
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayBureauDeTabacAvecCoord
     */
    public function setCoordGeoLongitude(?float $coordGeoLongitude = null): self
    {
        // validation for constraint: float
        if (!is_null($coordGeoLongitude) && !(is_float($coordGeoLongitude) || is_numeric($coordGeoLongitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($coordGeoLongitude, true), gettype($coordGeoLongitude)), __LINE__);
        }
        $this->coordGeoLongitude = $coordGeoLongitude;
        
        return $this;
    }
    /**
     * Get urlGoogleMaps value
     * @return string|null
     */
    public function getUrlGoogleMaps(): ?string
    {
        return $this->urlGoogleMaps;
    }
    /**
     * Set urlGoogleMaps value
     * @param string $urlGoogleMaps
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayBureauDeTabacAvecCoord
     */
    public function setUrlGoogleMaps(?string $urlGoogleMaps = null): self
    {
        // validation for constraint: string
        if (!is_null($urlGoogleMaps) && !is_string($urlGoogleMaps)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlGoogleMaps, true), gettype($urlGoogleMaps)), __LINE__);
        }
        $this->urlGoogleMaps = $urlGoogleMaps;
        
        return $this;
    }
}
