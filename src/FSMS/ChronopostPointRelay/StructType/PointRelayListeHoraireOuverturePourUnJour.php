<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listeHoraireOuverturePourUnJour StructType
 * @package PointRelay
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointRelayListeHoraireOuverturePourUnJour extends AbstractStructBase
{
    /**
     * The horairesAsString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $horairesAsString = null;
    /**
     * The jour
     * @var int|null
     */
    protected ?int $jour = null;
    /**
     * The listeHoraireOuverture
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture[]
     */
    protected ?array $listeHoraireOuverture = null;
    /**
     * Constructor method for listeHoraireOuverturePourUnJour
     * @uses PointRelayListeHoraireOuverturePourUnJour::setHorairesAsString()
     * @uses PointRelayListeHoraireOuverturePourUnJour::setJour()
     * @uses PointRelayListeHoraireOuverturePourUnJour::setListeHoraireOuverture()
     * @param string $horairesAsString
     * @param int $jour
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture[] $listeHoraireOuverture
     */
    public function __construct(?string $horairesAsString = null, ?int $jour = null, ?array $listeHoraireOuverture = null)
    {
        $this
            ->setHorairesAsString($horairesAsString)
            ->setJour($jour)
            ->setListeHoraireOuverture($listeHoraireOuverture);
    }
    /**
     * Get horairesAsString value
     * @return string|null
     */
    public function getHorairesAsString(): ?string
    {
        return $this->horairesAsString;
    }
    /**
     * Set horairesAsString value
     * @param string $horairesAsString
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayListeHoraireOuverturePourUnJour
     */
    public function setHorairesAsString(?string $horairesAsString = null): self
    {
        // validation for constraint: string
        if (!is_null($horairesAsString) && !is_string($horairesAsString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horairesAsString, true), gettype($horairesAsString)), __LINE__);
        }
        $this->horairesAsString = $horairesAsString;
        
        return $this;
    }
    /**
     * Get jour value
     * @return int|null
     */
    public function getJour(): ?int
    {
        return $this->jour;
    }
    /**
     * Set jour value
     * @param int $jour
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayListeHoraireOuverturePourUnJour
     */
    public function setJour(?int $jour = null): self
    {
        // validation for constraint: int
        if (!is_null($jour) && !(is_int($jour) || ctype_digit($jour))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($jour, true), gettype($jour)), __LINE__);
        }
        $this->jour = $jour;
        
        return $this;
    }
    /**
     * Get listeHoraireOuverture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture[]
     */
    public function getListeHoraireOuverture(): ?array
    {
        return $this->listeHoraireOuverture ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setListeHoraireOuverture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListeHoraireOuverture method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListeHoraireOuvertureForArrayConstraintFromSetListeHoraireOuverture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listeHoraireOuverturePourUnJourListeHoraireOuvertureItem) {
            // validation for constraint: itemType
            if (!$listeHoraireOuverturePourUnJourListeHoraireOuvertureItem instanceof \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture) {
                $invalidValues[] = is_object($listeHoraireOuverturePourUnJourListeHoraireOuvertureItem) ? get_class($listeHoraireOuverturePourUnJourListeHoraireOuvertureItem) : sprintf('%s(%s)', gettype($listeHoraireOuverturePourUnJourListeHoraireOuvertureItem), var_export($listeHoraireOuverturePourUnJourListeHoraireOuvertureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listeHoraireOuverture property can only contain items of type \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listeHoraireOuverture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture[] $listeHoraireOuverture
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayListeHoraireOuverturePourUnJour
     */
    public function setListeHoraireOuverture(?array $listeHoraireOuverture = null): self
    {
        // validation for constraint: array
        if ('' !== ($listeHoraireOuvertureArrayErrorMessage = self::validateListeHoraireOuvertureForArrayConstraintFromSetListeHoraireOuverture($listeHoraireOuverture))) {
            throw new InvalidArgumentException($listeHoraireOuvertureArrayErrorMessage, __LINE__);
        }
        if (is_null($listeHoraireOuverture) || (is_array($listeHoraireOuverture) && empty($listeHoraireOuverture))) {
            unset($this->listeHoraireOuverture);
        } else {
            $this->listeHoraireOuverture = $listeHoraireOuverture;
        }
        
        return $this;
    }
    /**
     * Add item to listeHoraireOuverture value
     * @throws InvalidArgumentException
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture $item
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayListeHoraireOuverturePourUnJour
     */
    public function addToListeHoraireOuverture(\FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture) {
            throw new InvalidArgumentException(sprintf('The listeHoraireOuverture property can only contain items of type \FSMS\ChronopostPointRelay\StructType\PointRelayHoraireOuverture, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listeHoraireOuverture[] = $item;
        
        return $this;
    }
}
