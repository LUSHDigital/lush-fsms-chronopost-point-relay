<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Recherche ServiceType
 * @package PointRelay
 * @subpackage Services
 */
class PointRelayRecherche extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParServiceAGL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParServiceAGL $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParServiceAGLResponse|bool
     */
    public function recherchePointChronopostInterParServiceAGL(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParServiceAGL $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParServiceAGL = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParServiceAGL', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParServiceAGL;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopost $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostResponse|bool
     */
    public function recherchePointChronopost(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopost $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopost = $this->getSoapClient()->__soapCall('recherchePointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParService $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParServiceResponse|bool
     */
    public function recherchePointChronopostInterParService(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParService = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParCodeproduitEtCodepostalEtDate $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtParCodeproduitEtCodepostalEtDate(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheBtParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParIdChronopostA2Pas $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtParIdChronopostA2Pas(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheTourneeParTypeTourneeEtPosteComptable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeParTypeTourneeEtPosteComptable $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeParTypeTourneeEtPosteComptableResponse|bool
     */
    public function rechercheTourneeParTypeTourneeEtPosteComptable(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeParTypeTourneeEtPosteComptable $parameters)
    {
        try {
            $this->setResult($resultRechercheTourneeParTypeTourneeEtPosteComptable = $this->getSoapClient()->__soapCall('rechercheTourneeParTypeTourneeEtPosteComptable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTourneeParTypeTourneeEtPosteComptable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopostParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParId $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParIdResponse|bool
     */
    public function recherchePointChronopostParId(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParId = $this->getSoapClient()->__soapCall('recherchePointChronopostParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheDetailPointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopost $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopostResponse|bool
     */
    public function rechercheDetailPointChronopost(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopost $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopost = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiques $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiques(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInter $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterResponse|bool
     */
    public function recherchePointChronopostInter(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInter = $this->getSoapClient()->__soapCall('recherchePointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiques $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiques(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostAvecCoordParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostAvecCoordParId $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostAvecCoordParIdResponse|bool
     */
    public function recherchePointChronopostAvecCoordParId(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostAvecCoordParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostAvecCoordParId = $this->getSoapClient()->__soapCall('recherchePointChronopostAvecCoordParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostAvecCoordParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiquesParService(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParIdChronopostA2Pas $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtAvecPFParIdChronopostA2Pas(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheDetailPointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopostInter $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopostInterResponse|bool
     */
    public function rechercheDetailPointChronopostInter(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopostInter = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiquesParService $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiquesParService(\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheTournee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTournee $parameters
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeResponse|bool
     */
    public function rechercheTournee(\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTournee $parameters)
    {
        try {
            $this->setResult($resultRechercheTournee = $this->getSoapClient()->__soapCall('rechercheTournee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTournee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParIdChronopostA2PasResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParCodeproduitEtCodepostalEtDateResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParIdChronopostA2PasResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopostInterResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopostResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostAvecCoordParIdResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParServiceAGLResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParServiceResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiquesResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParIdResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeParTypeTourneeEtPosteComptableResponse|\FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
