<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \FSMS\ChronopostPointRelay\PointRelayClassMap::get(),
];
/**
 * Samples for Recherche ServiceType
 */
$recherche = new \FSMS\ChronopostPointRelay\ServiceType\PointRelayRecherche($options);
/**
 * Sample call for recherchePointChronopostInterParServiceAGL operation/method
 */
if ($recherche->recherchePointChronopostInterParServiceAGL(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParServiceAGL()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopost operation/method
 */
if ($recherche->recherchePointChronopost(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopost()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostInterParService operation/method
 */
if ($recherche->recherchePointChronopostInterParService(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInterParService()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtParCodeproduitEtCodepostalEtDate operation/method
 */
if ($recherche->rechercheBtParCodeproduitEtCodepostalEtDate(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParCodeproduitEtCodepostalEtDate()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtParIdChronopostA2Pas operation/method
 */
if ($recherche->rechercheBtParIdChronopostA2Pas(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtParIdChronopostA2Pas()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheTourneeParTypeTourneeEtPosteComptable operation/method
 */
if ($recherche->rechercheTourneeParTypeTourneeEtPosteComptable(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTourneeParTypeTourneeEtPosteComptable()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostParId operation/method
 */
if ($recherche->recherchePointChronopostParId(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParId()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheDetailPointChronopost operation/method
 */
if ($recherche->rechercheDetailPointChronopost(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopost()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostParCoordonneesGeographiques
 * operation/method
 */
if ($recherche->recherchePointChronopostParCoordonneesGeographiques(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiques()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostInter operation/method
 */
if ($recherche->recherchePointChronopostInter(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostInter()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointRelaisParCoordonneesGeographiques operation/method
 */
if ($recherche->recherchePointRelaisParCoordonneesGeographiques(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiques()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostAvecCoordParId operation/method
 */
if ($recherche->recherchePointChronopostAvecCoordParId(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostAvecCoordParId()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointRelaisParCoordonneesGeographiquesParService
 * operation/method
 */
if ($recherche->recherchePointRelaisParCoordonneesGeographiquesParService(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointRelaisParCoordonneesGeographiquesParService()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtAvecPFParIdChronopostA2Pas operation/method
 */
if ($recherche->rechercheBtAvecPFParIdChronopostA2Pas(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParIdChronopostA2Pas()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheDetailPointChronopostInter operation/method
 */
if ($recherche->rechercheDetailPointChronopostInter(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheDetailPointChronopostInter()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for recherchePointChronopostParCoordonneesGeographiquesParService
 * operation/method
 */
if ($recherche->recherchePointChronopostParCoordonneesGeographiquesParService(new \FSMS\ChronopostPointRelay\StructType\PointRelayRecherchePointChronopostParCoordonneesGeographiquesParService()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheBtAvecPFParCodeproduitEtCodepostalEtDate
 * operation/method
 */
if ($recherche->rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheBtAvecPFParCodeproduitEtCodepostalEtDate()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Sample call for rechercheTournee operation/method
 */
if ($recherche->rechercheTournee(new \FSMS\ChronopostPointRelay\StructType\PointRelayRechercheTournee()) !== false) {
    print_r($recherche->getResult());
} else {
    print_r($recherche->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \FSMS\ChronopostPointRelay\ServiceType\PointRelayGet($options);
/**
 * Sample call for getAllChronopostAgences operation/method
 */
if ($get->getAllChronopostAgences(new \FSMS\ChronopostPointRelay\StructType\PointRelayGetAllChronopostAgences()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
