<?php

declare(strict_types=1);

namespace FSMS\ChronopostPointRelay;

/**
 * Class which returns the class map definition
 * @package PointRelay
 */
class PointRelayClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'pointCHRResult' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayPointCHRResult',
            'pointCHR' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayPointCHR',
            'listeHoraireOuverturePourUnJour' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayListeHoraireOuverturePourUnJour',
            'horaireOuverture' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayHoraireOuverture',
            'periodeFermeture' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayPeriodeFermeture',
            'bureauDeTabac' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayBureauDeTabac',
            'bureauDeTabacAvecCoord' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayBureauDeTabacAvecCoord',
            'tourneeCompleteResult' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayTourneeCompleteResult',
            'tourneeComplete' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayTourneeComplete',
            'tournee' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayTournee',
            'pointChronopost' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayPointChronopost',
            'pointChronopostAvecCoord' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayPointChronopostAvecCoord',
            'bureauDeTabacAvecPF' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayBureauDeTabacAvecPF',
            'tourneeResult' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayTourneeResult',
            'recherchePointChronopostInterParServiceAGL' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostInterParServiceAGL',
            'recherchePointChronopostInterParServiceAGLResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostInterParServiceAGLResponse',
            'recherchePointChronopost' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopost',
            'recherchePointChronopostResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostResponse',
            'recherchePointChronopostInterParService' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostInterParService',
            'recherchePointChronopostInterParServiceResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostInterParServiceResponse',
            'rechercheBtParCodeproduitEtCodepostalEtDate' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtParCodeproduitEtCodepostalEtDate',
            'rechercheBtParCodeproduitEtCodepostalEtDateResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtParCodeproduitEtCodepostalEtDateResponse',
            'rechercheBtParIdChronopostA2Pas' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtParIdChronopostA2Pas',
            'rechercheBtParIdChronopostA2PasResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtParIdChronopostA2PasResponse',
            'rechercheTourneeParTypeTourneeEtPosteComptable' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheTourneeParTypeTourneeEtPosteComptable',
            'rechercheTourneeParTypeTourneeEtPosteComptableResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheTourneeParTypeTourneeEtPosteComptableResponse',
            'recherchePointChronopostParId' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostParId',
            'recherchePointChronopostParIdResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostParIdResponse',
            'rechercheDetailPointChronopost' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheDetailPointChronopost',
            'rechercheDetailPointChronopostResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheDetailPointChronopostResponse',
            'recherchePointChronopostParCoordonneesGeographiques' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostParCoordonneesGeographiques',
            'recherchePointChronopostParCoordonneesGeographiquesResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostParCoordonneesGeographiquesResponse',
            'recherchePointChronopostInter' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostInter',
            'recherchePointChronopostInterResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostInterResponse',
            'recherchePointRelaisParCoordonneesGeographiques' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointRelaisParCoordonneesGeographiques',
            'recherchePointRelaisParCoordonneesGeographiquesResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointRelaisParCoordonneesGeographiquesResponse',
            'recherchePointChronopostAvecCoordParId' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostAvecCoordParId',
            'recherchePointChronopostAvecCoordParIdResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostAvecCoordParIdResponse',
            'getAllChronopostAgences' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayGetAllChronopostAgences',
            'getAllChronopostAgencesResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayGetAllChronopostAgencesResponse',
            'recherchePointRelaisParCoordonneesGeographiquesParService' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService',
            'recherchePointRelaisParCoordonneesGeographiquesParServiceResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParIdChronopostA2Pas' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtAvecPFParIdChronopostA2Pas',
            'rechercheBtAvecPFParIdChronopostA2PasResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtAvecPFParIdChronopostA2PasResponse',
            'rechercheDetailPointChronopostInter' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheDetailPointChronopostInter',
            'rechercheDetailPointChronopostInterResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheDetailPointChronopostInterResponse',
            'recherchePointChronopostParCoordonneesGeographiquesParService' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostParCoordonneesGeographiquesParService',
            'recherchePointChronopostParCoordonneesGeographiquesParServiceResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRecherchePointChronopostParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtAvecPFParCodeproduitEtCodepostalEtDate',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse',
            'rechercheTournee' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheTournee',
            'rechercheTourneeResponse' => '\\FSMS\\ChronopostPointRelay\\StructType\\PointRelayRechercheTourneeResponse',
        ];
    }
}
