<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\GeneralUtils_SSP;


/**
 * GeneralUtils Web Service.
 */
class GeneralUtils_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CalluProduceAPIViaXml' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CalluProduceAPIViaXml',
  'CalluProduceAPIViaXmlResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CalluProduceAPIViaXmlResponse',
  'CalluProduceAPIViaXmlFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CalluProduceAPIViaXmlFile',
  'CalluProduceAPIViaXmlFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CalluProduceAPIViaXmlFileResponse',
  'CalculateProductionImpositionNup' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CalculateProductionImpositionNup',
  'CalculateProductionImpositionNupResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CalculateProductionImpositionNupResponse',
  'NupValues' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\NupValues',
  'GetBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileStream',
  'GetBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileStreamResponse',
  'GetBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileStreamChunk',
  'GetBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileStreamChunkResponse',
  'GetBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileStreamSize',
  'GetBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileStreamSizeResponse',
  'GetBinaryFileThumbnailStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileThumbnailStream',
  'GetBinaryFileThumbnailStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetBinaryFileThumbnailStreamResponse',
  'CreateThumbnailToTempStorage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CreateThumbnailToTempStorage',
  'CreateThumbnailToTempStorageResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\CreateThumbnailToTempStorageResponse',
  'ClearProductionElementsCache' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ClearProductionElementsCache',
  'ClearProductionElementsCacheResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ClearProductionElementsCacheResponse',
  'ClearGlobalPrintCache' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ClearGlobalPrintCache',
  'ClearGlobalPrintCacheResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ClearGlobalPrintCacheResponse',
  'GetHeliconProxyUpdateScript' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetHeliconProxyUpdateScript',
  'GetHeliconProxyUpdateScriptResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetHeliconProxyUpdateScriptResponse',
  'GetHeliconSupportedVersion' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetHeliconSupportedVersion',
  'GetHeliconSupportedVersionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetHeliconSupportedVersionResponse',
  'IsFlashCompatibleReturnCompatibleVersion' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\IsFlashCompatibleReturnCompatibleVersion',
  'IsFlashCompatibleReturnCompatibleVersionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\IsFlashCompatibleReturnCompatibleVersionResponse',
  'IsFlashCompatible' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\IsFlashCompatible',
  'IsFlashCompatibleResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\IsFlashCompatibleResponse',
  'ProcessImageInAIE' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ProcessImageInAIE',
  'ProcessImageInAIEResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ProcessImageInAIEResponse',
  'GetPathLocatorDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetPathLocatorDataSet',
  'GetPathLocatorDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetPathLocatorDataSetResponse',
  'GetPathLocatorDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetPathLocatorDataSetResult',
  'GetPathLocatorXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetPathLocatorXMPTblDataSet',
  'GetPathLocatorXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetPathLocatorXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\XMPRowField',
  'GetPathLocatorValue' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetPathLocatorValue',
  'GetPathLocatorValueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetPathLocatorValueResponse',
  'SetPathLocatorValue' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\SetPathLocatorValue',
  'SetPathLocatorValueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\SetPathLocatorValueResponse',
  'ValidateFriendlyURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ValidateFriendlyURL',
  'ValidateFriendlyURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\ValidateFriendlyURLResponse',
  'GetVersionInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetVersionInfo',
  'GetVersionInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetVersionInfoResponse',
  'VersionInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\VersionInfo',
  'GetVersionInfoEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetVersionInfoEx',
  'GetVersionInfoExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\OtherServices\\GeneralUtils_SSP\\GetVersionInfoExResponse',
);

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xmpiewsapi/GeneralUtils_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Call uProduce API using an xml.
     *
     * @param CalluProduceAPIViaXml $parameters
     * @return CalluProduceAPIViaXmlResponse
     */
    public function CalluProduceAPIViaXml(CalluProduceAPIViaXml $parameters)
    {
      return $this->__soapCall('CalluProduceAPIViaXml', array($parameters));
    }

    /**
     * Call uProduce API using an xml file.
     *
     * @param CalluProduceAPIViaXmlFile $parameters
     * @return CalluProduceAPIViaXmlFileResponse
     */
    public function CalluProduceAPIViaXmlFile(CalluProduceAPIViaXmlFile $parameters)
    {
      return $this->__soapCall('CalluProduceAPIViaXmlFile', array($parameters));
    }

    /**
     * Calculate Production Imposition number of pages.
     *
     * @param CalculateProductionImpositionNup $parameters
     * @return CalculateProductionImpositionNupResponse
     */
    public function CalculateProductionImpositionNup(CalculateProductionImpositionNup $parameters)
    {
      return $this->__soapCall('CalculateProductionImpositionNup', array($parameters));
    }

    /**
     * Get file content as stream.
     *
     * @param GetBinaryFileStream $parameters
     * @return GetBinaryFileStreamResponse
     */
    public function GetBinaryFileStream(GetBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetBinaryFileStream', array($parameters));
    }

    /**
     * Get file content chunk as stream.
     *
     * @param GetBinaryFileStreamChunk $parameters
     * @return GetBinaryFileStreamChunkResponse
     */
    public function GetBinaryFileStreamChunk(GetBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Get file size.
     *
     * @param GetBinaryFileStreamSize $parameters
     * @return GetBinaryFileStreamSizeResponse
     */
    public function GetBinaryFileStreamSize(GetBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamSize', array($parameters));
    }

    /**
     * Get thumbnail file content as stream.
     *
     * @param GetBinaryFileThumbnailStream $parameters
     * @return GetBinaryFileThumbnailStreamResponse
     */
    public function GetBinaryFileThumbnailStream(GetBinaryFileThumbnailStream $parameters)
    {
      return $this->__soapCall('GetBinaryFileThumbnailStream', array($parameters));
    }

    /**
     * Creates the thumbnail file into the temp storage and return its token identifier.
     *
     * @param CreateThumbnailToTempStorage $parameters
     * @return CreateThumbnailToTempStorageResponse
     */
    public function CreateThumbnailToTempStorage(CreateThumbnailToTempStorage $parameters)
    {
      return $this->__soapCall('CreateThumbnailToTempStorage', array($parameters));
    }

    /**
     * Clears global print cache.
     *
     * @param ClearProductionElementsCache $parameters
     * @return ClearProductionElementsCacheResponse
     */
    public function ClearProductionElementsCache(ClearProductionElementsCache $parameters)
    {
      return $this->__soapCall('ClearProductionElementsCache', array($parameters));
    }

    /**
     * Clears production elements cache.
     *
     * @param ClearGlobalPrintCache $parameters
     * @return ClearGlobalPrintCacheResponse
     */
    public function ClearGlobalPrintCache(ClearGlobalPrintCache $parameters)
    {
      return $this->__soapCall('ClearGlobalPrintCache', array($parameters));
    }

    /**
     * Get Helicon proxy update script.
     *
     * @param GetHeliconProxyUpdateScript $parameters
     * @return GetHeliconProxyUpdateScriptResponse
     */
    public function GetHeliconProxyUpdateScript(GetHeliconProxyUpdateScript $parameters)
    {
      return $this->__soapCall('GetHeliconProxyUpdateScript', array($parameters));
    }

    /**
     * Get supported Helicon version.
     *
     * @param GetHeliconSupportedVersion $parameters
     * @return GetHeliconSupportedVersionResponse
     */
    public function GetHeliconSupportedVersion(GetHeliconSupportedVersion $parameters)
    {
      return $this->__soapCall('GetHeliconSupportedVersion', array($parameters));
    }

    /**
     * Checks if the file in the given path is 72 bit RGB JPEG, GIF or PNG if not - returns such stream in the out parameter.
     *
     * @param IsFlashCompatibleReturnCompatibleVersion $parameters
     * @return IsFlashCompatibleReturnCompatibleVersionResponse
     */
    public function IsFlashCompatibleReturnCompatibleVersion(IsFlashCompatibleReturnCompatibleVersion $parameters)
    {
      return $this->__soapCall('IsFlashCompatibleReturnCompatibleVersion', array($parameters));
    }

    /**
     * Checks if the file in the given path is 72 bit RGB JPEG, GIF or PNG.
     *
     * @param IsFlashCompatible $parameters
     * @return IsFlashCompatibleResponse
     */
    public function IsFlashCompatible(IsFlashCompatible $parameters)
    {
      return $this->__soapCall('IsFlashCompatible', array($parameters));
    }

    /**
     * Runs image via the AIE mechanism and gives back the result. will raise exceptions for unsupported images types.
     *
     * @param ProcessImageInAIE $parameters
     * @return ProcessImageInAIEResponse
     */
    public function ProcessImageInAIE(ProcessImageInAIE $parameters)
    {
      return $this->__soapCall('ProcessImageInAIE', array($parameters));
    }

    /**
     * Get Path Locator Properties view.
     *
     * @param GetPathLocatorDataSet $parameters
     * @return GetPathLocatorDataSetResponse
     */
    public function GetPathLocatorDataSet(GetPathLocatorDataSet $parameters)
    {
      return $this->__soapCall('GetPathLocatorDataSet', array($parameters));
    }

    /**
     * Get Path Locator Properties view.
     *
     * @param GetPathLocatorXMPTblDataSet $parameters
     * @return GetPathLocatorXMPTblDataSetResponse
     */
    public function GetPathLocatorXMPTblDataSet(GetPathLocatorXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetPathLocatorXMPTblDataSet', array($parameters));
    }

    /**
     * Get Path Locator value by name.
     *
     * @param GetPathLocatorValue $parameters
     * @return GetPathLocatorValueResponse
     */
    public function GetPathLocatorValue(GetPathLocatorValue $parameters)
    {
      return $this->__soapCall('GetPathLocatorValue', array($parameters));
    }

    /**
     * Set Path Locator value.
     *
     * @param SetPathLocatorValue $parameters
     * @return SetPathLocatorValueResponse
     */
    public function SetPathLocatorValue(SetPathLocatorValue $parameters)
    {
      return $this->__soapCall('SetPathLocatorValue', array($parameters));
    }

    /**
     * Validate friendly URL.
     *
     * @param ValidateFriendlyURL $parameters
     * @return ValidateFriendlyURLResponse
     */
    public function ValidateFriendlyURL(ValidateFriendlyURL $parameters)
    {
      return $this->__soapCall('ValidateFriendlyURL', array($parameters));
    }

    /**
     * Get version info. (This method is deprecated from version 5.0.)
     *
     * @param GetVersionInfo $parameters
     * @return GetVersionInfoResponse
     */
    public function GetVersionInfo(GetVersionInfo $parameters)
    {
      return $this->__soapCall('GetVersionInfo', array($parameters));
    }

    /**
     * Get version infoEx. (This method replaces GetVersionInfo.)
     *
     * @param GetVersionInfoEx $parameters
     * @return GetVersionInfoExResponse
     */
    public function GetVersionInfoEx(GetVersionInfoEx $parameters)
    {
      return $this->__soapCall('GetVersionInfoEx', array($parameters));
    }

}
