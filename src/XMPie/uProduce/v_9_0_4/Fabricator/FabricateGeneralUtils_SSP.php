<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXml;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXmlResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXmlFile;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXmlFileResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNupResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\NupValues;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileThumbnailStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetBinaryFileThumbnailStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorageResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ClearProductionElementsCache;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ClearProductionElementsCacheResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ClearGlobalPrintCache;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ClearGlobalPrintCacheResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetHeliconProxyUpdateScript;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetHeliconProxyUpdateScriptResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetHeliconSupportedVersion;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetHeliconSupportedVersionResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\IsFlashCompatibleReturnCompatibleVersion;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\IsFlashCompatibleReturnCompatibleVersionResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\IsFlashCompatible;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\IsFlashCompatibleResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ProcessImageInAIE;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ProcessImageInAIEResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetPathLocatorDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetPathLocatorDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetPathLocatorDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetPathLocatorXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetPathLocatorXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetPathLocatorValue;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetPathLocatorValueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\SetPathLocatorValue;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\SetPathLocatorValueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetVersionInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetVersionInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\VersionInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetVersionInfoEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GetVersionInfoExResponse;


class FabricateGeneralUtils_SSP
{
    private $paramAutoSet;
    
    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return CalluProduceAPIViaXml
    */
    public function CalluProduceAPIViaXml($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalluProduceAPIViaXml = new CalluProduceAPIViaXml();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalluProduceAPIViaXml, $methodName)) {
                $CalluProduceAPIViaXml->$methodName($paramValue);
            }
        }
        return $CalluProduceAPIViaXml;
    }


   /**
    * @param array $paramAutoSet
    * @return CalluProduceAPIViaXmlResponse
    */
    public function CalluProduceAPIViaXmlResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalluProduceAPIViaXmlResponse = new CalluProduceAPIViaXmlResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalluProduceAPIViaXmlResponse, $methodName)) {
                $CalluProduceAPIViaXmlResponse->$methodName($paramValue);
            }
        }
        return $CalluProduceAPIViaXmlResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CalluProduceAPIViaXmlFile
    */
    public function CalluProduceAPIViaXmlFile($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalluProduceAPIViaXmlFile = new CalluProduceAPIViaXmlFile();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalluProduceAPIViaXmlFile, $methodName)) {
                $CalluProduceAPIViaXmlFile->$methodName($paramValue);
            }
        }
        return $CalluProduceAPIViaXmlFile;
    }


   /**
    * @param array $paramAutoSet
    * @return CalluProduceAPIViaXmlFileResponse
    */
    public function CalluProduceAPIViaXmlFileResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalluProduceAPIViaXmlFileResponse = new CalluProduceAPIViaXmlFileResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalluProduceAPIViaXmlFileResponse, $methodName)) {
                $CalluProduceAPIViaXmlFileResponse->$methodName($paramValue);
            }
        }
        return $CalluProduceAPIViaXmlFileResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CalculateProductionImpositionNup
    */
    public function CalculateProductionImpositionNup($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalculateProductionImpositionNup = new CalculateProductionImpositionNup();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalculateProductionImpositionNup, $methodName)) {
                $CalculateProductionImpositionNup->$methodName($paramValue);
            }
        }
        return $CalculateProductionImpositionNup;
    }


   /**
    * @param array $paramAutoSet
    * @return CalculateProductionImpositionNupResponse
    */
    public function CalculateProductionImpositionNupResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CalculateProductionImpositionNupResponse = new CalculateProductionImpositionNupResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CalculateProductionImpositionNupResponse, $methodName)) {
                $CalculateProductionImpositionNupResponse->$methodName($paramValue);
            }
        }
        return $CalculateProductionImpositionNupResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return NupValues
    */
    public function NupValues($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $NupValues = new NupValues();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($NupValues, $methodName)) {
                $NupValues->$methodName($paramValue);
            }
        }
        return $NupValues;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStream
    */
    public function GetBinaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStream = new GetBinaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStream, $methodName)) {
                $GetBinaryFileStream->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamResponse
    */
    public function GetBinaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamResponse = new GetBinaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamResponse, $methodName)) {
                $GetBinaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamChunk
    */
    public function GetBinaryFileStreamChunk($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamChunk = new GetBinaryFileStreamChunk();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamChunk, $methodName)) {
                $GetBinaryFileStreamChunk->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamChunk;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamChunkResponse
    */
    public function GetBinaryFileStreamChunkResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamChunkResponse = new GetBinaryFileStreamChunkResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamChunkResponse, $methodName)) {
                $GetBinaryFileStreamChunkResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamChunkResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamSize
    */
    public function GetBinaryFileStreamSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamSize = new GetBinaryFileStreamSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamSize, $methodName)) {
                $GetBinaryFileStreamSize->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamSizeResponse
    */
    public function GetBinaryFileStreamSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamSizeResponse = new GetBinaryFileStreamSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamSizeResponse, $methodName)) {
                $GetBinaryFileStreamSizeResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileThumbnailStream
    */
    public function GetBinaryFileThumbnailStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileThumbnailStream = new GetBinaryFileThumbnailStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileThumbnailStream, $methodName)) {
                $GetBinaryFileThumbnailStream->$methodName($paramValue);
            }
        }
        return $GetBinaryFileThumbnailStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileThumbnailStreamResponse
    */
    public function GetBinaryFileThumbnailStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileThumbnailStreamResponse = new GetBinaryFileThumbnailStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileThumbnailStreamResponse, $methodName)) {
                $GetBinaryFileThumbnailStreamResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileThumbnailStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateThumbnailToTempStorage
    */
    public function CreateThumbnailToTempStorage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateThumbnailToTempStorage = new CreateThumbnailToTempStorage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateThumbnailToTempStorage, $methodName)) {
                $CreateThumbnailToTempStorage->$methodName($paramValue);
            }
        }
        return $CreateThumbnailToTempStorage;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateThumbnailToTempStorageResponse
    */
    public function CreateThumbnailToTempStorageResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateThumbnailToTempStorageResponse = new CreateThumbnailToTempStorageResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateThumbnailToTempStorageResponse, $methodName)) {
                $CreateThumbnailToTempStorageResponse->$methodName($paramValue);
            }
        }
        return $CreateThumbnailToTempStorageResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ClearProductionElementsCache
    */
    public function ClearProductionElementsCache($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ClearProductionElementsCache = new ClearProductionElementsCache();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ClearProductionElementsCache, $methodName)) {
                $ClearProductionElementsCache->$methodName($paramValue);
            }
        }
        return $ClearProductionElementsCache;
    }


   /**
    * @param array $paramAutoSet
    * @return ClearProductionElementsCacheResponse
    */
    public function ClearProductionElementsCacheResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ClearProductionElementsCacheResponse = new ClearProductionElementsCacheResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ClearProductionElementsCacheResponse, $methodName)) {
                $ClearProductionElementsCacheResponse->$methodName($paramValue);
            }
        }
        return $ClearProductionElementsCacheResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ClearGlobalPrintCache
    */
    public function ClearGlobalPrintCache($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ClearGlobalPrintCache = new ClearGlobalPrintCache();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ClearGlobalPrintCache, $methodName)) {
                $ClearGlobalPrintCache->$methodName($paramValue);
            }
        }
        return $ClearGlobalPrintCache;
    }


   /**
    * @param array $paramAutoSet
    * @return ClearGlobalPrintCacheResponse
    */
    public function ClearGlobalPrintCacheResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ClearGlobalPrintCacheResponse = new ClearGlobalPrintCacheResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ClearGlobalPrintCacheResponse, $methodName)) {
                $ClearGlobalPrintCacheResponse->$methodName($paramValue);
            }
        }
        return $ClearGlobalPrintCacheResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetHeliconProxyUpdateScript
    */
    public function GetHeliconProxyUpdateScript($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetHeliconProxyUpdateScript = new GetHeliconProxyUpdateScript();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetHeliconProxyUpdateScript, $methodName)) {
                $GetHeliconProxyUpdateScript->$methodName($paramValue);
            }
        }
        return $GetHeliconProxyUpdateScript;
    }


   /**
    * @param array $paramAutoSet
    * @return GetHeliconProxyUpdateScriptResponse
    */
    public function GetHeliconProxyUpdateScriptResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetHeliconProxyUpdateScriptResponse = new GetHeliconProxyUpdateScriptResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetHeliconProxyUpdateScriptResponse, $methodName)) {
                $GetHeliconProxyUpdateScriptResponse->$methodName($paramValue);
            }
        }
        return $GetHeliconProxyUpdateScriptResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetHeliconSupportedVersion
    */
    public function GetHeliconSupportedVersion($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetHeliconSupportedVersion = new GetHeliconSupportedVersion();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetHeliconSupportedVersion, $methodName)) {
                $GetHeliconSupportedVersion->$methodName($paramValue);
            }
        }
        return $GetHeliconSupportedVersion;
    }


   /**
    * @param array $paramAutoSet
    * @return GetHeliconSupportedVersionResponse
    */
    public function GetHeliconSupportedVersionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetHeliconSupportedVersionResponse = new GetHeliconSupportedVersionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetHeliconSupportedVersionResponse, $methodName)) {
                $GetHeliconSupportedVersionResponse->$methodName($paramValue);
            }
        }
        return $GetHeliconSupportedVersionResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsFlashCompatibleReturnCompatibleVersion
    */
    public function IsFlashCompatibleReturnCompatibleVersion($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsFlashCompatibleReturnCompatibleVersion = new IsFlashCompatibleReturnCompatibleVersion();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsFlashCompatibleReturnCompatibleVersion, $methodName)) {
                $IsFlashCompatibleReturnCompatibleVersion->$methodName($paramValue);
            }
        }
        return $IsFlashCompatibleReturnCompatibleVersion;
    }


   /**
    * @param array $paramAutoSet
    * @return IsFlashCompatibleReturnCompatibleVersionResponse
    */
    public function IsFlashCompatibleReturnCompatibleVersionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsFlashCompatibleReturnCompatibleVersionResponse = new IsFlashCompatibleReturnCompatibleVersionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsFlashCompatibleReturnCompatibleVersionResponse, $methodName)) {
                $IsFlashCompatibleReturnCompatibleVersionResponse->$methodName($paramValue);
            }
        }
        return $IsFlashCompatibleReturnCompatibleVersionResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsFlashCompatible
    */
    public function IsFlashCompatible($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsFlashCompatible = new IsFlashCompatible();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsFlashCompatible, $methodName)) {
                $IsFlashCompatible->$methodName($paramValue);
            }
        }
        return $IsFlashCompatible;
    }


   /**
    * @param array $paramAutoSet
    * @return IsFlashCompatibleResponse
    */
    public function IsFlashCompatibleResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsFlashCompatibleResponse = new IsFlashCompatibleResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsFlashCompatibleResponse, $methodName)) {
                $IsFlashCompatibleResponse->$methodName($paramValue);
            }
        }
        return $IsFlashCompatibleResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ProcessImageInAIE
    */
    public function ProcessImageInAIE($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProcessImageInAIE = new ProcessImageInAIE();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProcessImageInAIE, $methodName)) {
                $ProcessImageInAIE->$methodName($paramValue);
            }
        }
        return $ProcessImageInAIE;
    }


   /**
    * @param array $paramAutoSet
    * @return ProcessImageInAIEResponse
    */
    public function ProcessImageInAIEResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProcessImageInAIEResponse = new ProcessImageInAIEResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProcessImageInAIEResponse, $methodName)) {
                $ProcessImageInAIEResponse->$methodName($paramValue);
            }
        }
        return $ProcessImageInAIEResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathLocatorDataSet
    */
    public function GetPathLocatorDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathLocatorDataSet = new GetPathLocatorDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathLocatorDataSet, $methodName)) {
                $GetPathLocatorDataSet->$methodName($paramValue);
            }
        }
        return $GetPathLocatorDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathLocatorDataSetResponse
    */
    public function GetPathLocatorDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathLocatorDataSetResponse = new GetPathLocatorDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathLocatorDataSetResponse, $methodName)) {
                $GetPathLocatorDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPathLocatorDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathLocatorDataSetResult
    */
    public function GetPathLocatorDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathLocatorDataSetResult = new GetPathLocatorDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathLocatorDataSetResult, $methodName)) {
                $GetPathLocatorDataSetResult->$methodName($paramValue);
            }
        }
        return $GetPathLocatorDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathLocatorXMPTblDataSet
    */
    public function GetPathLocatorXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathLocatorXMPTblDataSet = new GetPathLocatorXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathLocatorXMPTblDataSet, $methodName)) {
                $GetPathLocatorXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetPathLocatorXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathLocatorXMPTblDataSetResponse
    */
    public function GetPathLocatorXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathLocatorXMPTblDataSetResponse = new GetPathLocatorXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathLocatorXMPTblDataSetResponse, $methodName)) {
                $GetPathLocatorXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPathLocatorXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblDataSet
    */
    public function XMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblDataSet = new XMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblDataSet, $methodName)) {
                $XMPTblDataSet->$methodName($paramValue);
            }
        }
        return $XMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTbl
    */
    public function ArrayOfXMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTbl = new ArrayOfXMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTbl, $methodName)) {
                $ArrayOfXMPTbl->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTbl
    */
    public function XMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTbl = new XMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTbl, $methodName)) {
                $XMPTbl->$methodName($paramValue);
            }
        }
        return $XMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblColumn
    */
    public function ArrayOfXMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblColumn = new ArrayOfXMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblColumn, $methodName)) {
                $ArrayOfXMPTblColumn->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblColumn
    */
    public function XMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblColumn = new XMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblColumn, $methodName)) {
                $XMPTblColumn->$methodName($paramValue);
            }
        }
        return $XMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblRow
    */
    public function ArrayOfXMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblRow = new ArrayOfXMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblRow, $methodName)) {
                $ArrayOfXMPTblRow->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblRow
    */
    public function XMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblRow = new XMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblRow, $methodName)) {
                $XMPTblRow->$methodName($paramValue);
            }
        }
        return $XMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPRowField
    */
    public function ArrayOfXMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPRowField = new ArrayOfXMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPRowField, $methodName)) {
                $ArrayOfXMPRowField->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPRowField
    */
    public function XMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPRowField = new XMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPRowField, $methodName)) {
                $XMPRowField->$methodName($paramValue);
            }
        }
        return $XMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathLocatorValue
    */
    public function GetPathLocatorValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathLocatorValue = new GetPathLocatorValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathLocatorValue, $methodName)) {
                $GetPathLocatorValue->$methodName($paramValue);
            }
        }
        return $GetPathLocatorValue;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathLocatorValueResponse
    */
    public function GetPathLocatorValueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathLocatorValueResponse = new GetPathLocatorValueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathLocatorValueResponse, $methodName)) {
                $GetPathLocatorValueResponse->$methodName($paramValue);
            }
        }
        return $GetPathLocatorValueResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPathLocatorValue
    */
    public function SetPathLocatorValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPathLocatorValue = new SetPathLocatorValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPathLocatorValue, $methodName)) {
                $SetPathLocatorValue->$methodName($paramValue);
            }
        }
        return $SetPathLocatorValue;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPathLocatorValueResponse
    */
    public function SetPathLocatorValueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPathLocatorValueResponse = new SetPathLocatorValueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPathLocatorValueResponse, $methodName)) {
                $SetPathLocatorValueResponse->$methodName($paramValue);
            }
        }
        return $SetPathLocatorValueResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ValidateFriendlyURL
    */
    public function ValidateFriendlyURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateFriendlyURL = new ValidateFriendlyURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateFriendlyURL, $methodName)) {
                $ValidateFriendlyURL->$methodName($paramValue);
            }
        }
        return $ValidateFriendlyURL;
    }


   /**
    * @param array $paramAutoSet
    * @return ValidateFriendlyURLResponse
    */
    public function ValidateFriendlyURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateFriendlyURLResponse = new ValidateFriendlyURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateFriendlyURLResponse, $methodName)) {
                $ValidateFriendlyURLResponse->$methodName($paramValue);
            }
        }
        return $ValidateFriendlyURLResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVersionInfo
    */
    public function GetVersionInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVersionInfo = new GetVersionInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVersionInfo, $methodName)) {
                $GetVersionInfo->$methodName($paramValue);
            }
        }
        return $GetVersionInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVersionInfoResponse
    */
    public function GetVersionInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVersionInfoResponse = new GetVersionInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVersionInfoResponse, $methodName)) {
                $GetVersionInfoResponse->$methodName($paramValue);
            }
        }
        return $GetVersionInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return VersionInfo
    */
    public function VersionInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $VersionInfo = new VersionInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($VersionInfo, $methodName)) {
                $VersionInfo->$methodName($paramValue);
            }
        }
        return $VersionInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVersionInfoEx
    */
    public function GetVersionInfoEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVersionInfoEx = new GetVersionInfoEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVersionInfoEx, $methodName)) {
                $GetVersionInfoEx->$methodName($paramValue);
            }
        }
        return $GetVersionInfoEx;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVersionInfoExResponse
    */
    public function GetVersionInfoExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVersionInfoExResponse = new GetVersionInfoExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVersionInfoExResponse, $methodName)) {
                $GetVersionInfoExResponse->$methodName($paramValue);
            }
        }
        return $GetVersionInfoExResponse;
    }



}

?>
