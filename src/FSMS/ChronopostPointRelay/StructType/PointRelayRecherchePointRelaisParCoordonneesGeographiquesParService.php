<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recherchePointRelaisParCoordonneesGeographiquesParService
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointRelaisParCoordonneesGeographiquesParService
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The coordGeoLatitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $coordGeoLatitude = null;
    /**
     * The coordGeoLongitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $coordGeoLongitude = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shippingDate = null;
    /**
     * The maxPointChronopost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxPointChronopost = null;
    /**
     * The maxDistanceSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $maxDistanceSearch = null;
    /**
     * The holidayTolerant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $holidayTolerant = null;
    /**
     * The serviceList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceList = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for recherchePointRelaisParCoordonneesGeographiquesParService
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setAccountNumber()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setPassword()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setCountryCode()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setCoordGeoLatitude()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setCoordGeoLongitude()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setType()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setProductCode()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setService()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setWeight()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setShippingDate()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setMaxPointChronopost()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setMaxDistanceSearch()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setHolidayTolerant()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setServiceList()
     * @uses PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService::setLanguage()
     * @param string $accountNumber
     * @param string $password
     * @param string $countryCode
     * @param string $coordGeoLatitude
     * @param string $coordGeoLongitude
     * @param string $type
     * @param string $productCode
     * @param string $service
     * @param string $weight
     * @param string $shippingDate
     * @param string $maxPointChronopost
     * @param string $maxDistanceSearch
     * @param string $holidayTolerant
     * @param string $serviceList
     * @param string $language
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $countryCode = null, ?string $coordGeoLatitude = null, ?string $coordGeoLongitude = null, ?string $type = null, ?string $productCode = null, ?string $service = null, ?string $weight = null, ?string $shippingDate = null, ?string $maxPointChronopost = null, ?string $maxDistanceSearch = null, ?string $holidayTolerant = null, ?string $serviceList = null, ?string $language = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setCountryCode($countryCode)
            ->setCoordGeoLatitude($coordGeoLatitude)
            ->setCoordGeoLongitude($coordGeoLongitude)
            ->setType($type)
            ->setProductCode($productCode)
            ->setService($service)
            ->setWeight($weight)
            ->setShippingDate($shippingDate)
            ->setMaxPointChronopost($maxPointChronopost)
            ->setMaxDistanceSearch($maxDistanceSearch)
            ->setHolidayTolerant($holidayTolerant)
            ->setServiceList($serviceList)
            ->setLanguage($language);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get coordGeoLatitude value
     * @return string|null
     */
    public function getCoordGeoLatitude(): ?string
    {
        return $this->coordGeoLatitude;
    }
    /**
     * Set coordGeoLatitude value
     * @param string $coordGeoLatitude
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setCoordGeoLatitude(?string $coordGeoLatitude = null): self
    {
        // validation for constraint: string
        if (!is_null($coordGeoLatitude) && !is_string($coordGeoLatitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coordGeoLatitude, true), gettype($coordGeoLatitude)), __LINE__);
        }
        $this->coordGeoLatitude = $coordGeoLatitude;
        
        return $this;
    }
    /**
     * Get coordGeoLongitude value
     * @return string|null
     */
    public function getCoordGeoLongitude(): ?string
    {
        return $this->coordGeoLongitude;
    }
    /**
     * Set coordGeoLongitude value
     * @param string $coordGeoLongitude
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setCoordGeoLongitude(?string $coordGeoLongitude = null): self
    {
        // validation for constraint: string
        if (!is_null($coordGeoLongitude) && !is_string($coordGeoLongitude)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coordGeoLongitude, true), gettype($coordGeoLongitude)), __LINE__);
        }
        $this->coordGeoLongitude = $coordGeoLongitude;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
        
        return $this;
    }
    /**
     * Get maxPointChronopost value
     * @return string|null
     */
    public function getMaxPointChronopost(): ?string
    {
        return $this->maxPointChronopost;
    }
    /**
     * Set maxPointChronopost value
     * @param string $maxPointChronopost
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setMaxPointChronopost(?string $maxPointChronopost = null): self
    {
        // validation for constraint: string
        if (!is_null($maxPointChronopost) && !is_string($maxPointChronopost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxPointChronopost, true), gettype($maxPointChronopost)), __LINE__);
        }
        $this->maxPointChronopost = $maxPointChronopost;
        
        return $this;
    }
    /**
     * Get maxDistanceSearch value
     * @return string|null
     */
    public function getMaxDistanceSearch(): ?string
    {
        return $this->maxDistanceSearch;
    }
    /**
     * Set maxDistanceSearch value
     * @param string $maxDistanceSearch
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setMaxDistanceSearch(?string $maxDistanceSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($maxDistanceSearch) && !is_string($maxDistanceSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxDistanceSearch, true), gettype($maxDistanceSearch)), __LINE__);
        }
        $this->maxDistanceSearch = $maxDistanceSearch;
        
        return $this;
    }
    /**
     * Get holidayTolerant value
     * @return string|null
     */
    public function getHolidayTolerant(): ?string
    {
        return $this->holidayTolerant;
    }
    /**
     * Set holidayTolerant value
     * @param string $holidayTolerant
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setHolidayTolerant(?string $holidayTolerant = null): self
    {
        // validation for constraint: string
        if (!is_null($holidayTolerant) && !is_string($holidayTolerant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holidayTolerant, true), gettype($holidayTolerant)), __LINE__);
        }
        $this->holidayTolerant = $holidayTolerant;
        
        return $this;
    }
    /**
     * Get serviceList value
     * @return string|null
     */
    public function getServiceList(): ?string
    {
        return $this->serviceList;
    }
    /**
     * Set serviceList value
     * @param string $serviceList
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setServiceList(?string $serviceList = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceList) && !is_string($serviceList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceList, true), gettype($serviceList)), __LINE__);
        }
        $this->serviceList = $serviceList;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
