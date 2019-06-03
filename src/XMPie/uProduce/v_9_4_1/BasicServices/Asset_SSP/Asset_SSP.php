<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Asset_SSP;


/**
 * Asset Web Service.
 */
class Asset_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateNewResponse',
  'CreateNewFromZip' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateNewFromZip',
  'CreateNewFromZipResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateNewFromZipResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\ArrayOfString',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\Replace',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\ReplaceResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\DeleteResponse',
  'GetAssetSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetAssetSource',
  'GetAssetSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetAssetSourceResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetProperties',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\SetPropertiesResponse',
  'GetPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetPath',
  'GetPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetPathResponse',
  'GetBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetBinaryFileStream',
  'GetBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetBinaryFileStreamResponse',
  'CreateFileToTempStorage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateFileToTempStorage',
  'CreateFileToTempStorageResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateFileToTempStorageResponse',
  'GetDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetDownloadURL',
  'GetDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetDownloadURLResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetNameResponse',
  'GetFileName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetFileName',
  'GetFileNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetFileNameResponse',
  'IsThumbnailAvailable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\IsThumbnailAvailable',
  'IsThumbnailAvailableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\IsThumbnailAvailableResponse',
  'GetThumbnail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetThumbnail',
  'GetThumbnailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetThumbnailResponse',
  'GetThumbnailBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetThumbnailBinaryFileStream',
  'GetThumbnailBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetThumbnailBinaryFileStreamResponse',
  'CreateThumbnailToTempStorage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateThumbnailToTempStorage',
  'CreateThumbnailToTempStorageResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\CreateThumbnailToTempStorageResponse',
  'GetThumbnailDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetThumbnailDownloadURL',
  'GetThumbnailDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetThumbnailDownloadURLResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\Asset_SSP\\GetIDResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Asset_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Asset from file.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Create new Asset from zip.
     *
     * @param CreateNewFromZip $parameters
     * @return CreateNewFromZipResponse
     */
    public function CreateNewFromZip(CreateNewFromZip $parameters)
    {
      return $this->__soapCall('CreateNewFromZip', array($parameters));
    }

    /**
     * Replace Asset.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Delete Asset.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Asset Source.
     *
     * @param GetAssetSource $parameters
     * @return GetAssetSourceResponse
     */
    public function GetAssetSource(GetAssetSource $parameters)
    {
      return $this->__soapCall('GetAssetSource', array($parameters));
    }

    /**
     * Get property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all properties.
     *
     * @param GetAllProperties $parameters
     * @return GetAllPropertiesResponse
     */
    public function GetAllProperties(GetAllProperties $parameters)
    {
      return $this->__soapCall('GetAllProperties', array($parameters));
    }

    /**
     * Get properties view.
     *
     * @param GetDataSet $parameters
     * @return GetDataSetResponse
     */
    public function GetDataSet(GetDataSet $parameters)
    {
      return $this->__soapCall('GetDataSet', array($parameters));
    }

    /**
     * Get properties view.
     *
     * @param GetXMPTblDataSet $parameters
     * @return GetXMPTblDataSetResponse
     */
    public function GetXMPTblDataSet(GetXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSet', array($parameters));
    }

    /**
     * Set property
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Set properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * return the full asset path.
     *
     * @param GetPath $parameters
     * @return GetPathResponse
     */
    public function GetPath(GetPath $parameters)
    {
      return $this->__soapCall('GetPath', array($parameters));
    }

    /**
     * return the asset stream.
     *
     * @param GetBinaryFileStream $parameters
     * @return GetBinaryFileStreamResponse
     */
    public function GetBinaryFileStream(GetBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetBinaryFileStream', array($parameters));
    }

    /**
     * Creates the asset file into the temp storage and return its token identifier.
     *
     * @param CreateFileToTempStorage $parameters
     * @return CreateFileToTempStorageResponse
     */
    public function CreateFileToTempStorage(CreateFileToTempStorage $parameters)
    {
      return $this->__soapCall('CreateFileToTempStorage', array($parameters));
    }

    /**
     * return the asset download url.
     *
     * @param GetDownloadURL $parameters
     * @return GetDownloadURLResponse
     */
    public function GetDownloadURL(GetDownloadURL $parameters)
    {
      return $this->__soapCall('GetDownloadURL', array($parameters));
    }

    /**
     * Get name of Asset.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Get file name of Asset.
     *
     * @param GetFileName $parameters
     * @return GetFileNameResponse
     */
    public function GetFileName(GetFileName $parameters)
    {
      return $this->__soapCall('GetFileName', array($parameters));
    }

    /**
     * Check if thumbnail available.
     *
     * @param IsThumbnailAvailable $parameters
     * @return IsThumbnailAvailableResponse
     */
    public function IsThumbnailAvailable(IsThumbnailAvailable $parameters)
    {
      return $this->__soapCall('IsThumbnailAvailable', array($parameters));
    }

    /**
     * Get thumbnail.
     *
     * @param GetThumbnail $parameters
     * @return GetThumbnailResponse
     */
    public function GetThumbnail(GetThumbnail $parameters)
    {
      return $this->__soapCall('GetThumbnail', array($parameters));
    }

    /**
     * return the asset thumbnail stream.
     *
     * @param GetThumbnailBinaryFileStream $parameters
     * @return GetThumbnailBinaryFileStreamResponse
     */
    public function GetThumbnailBinaryFileStream(GetThumbnailBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetThumbnailBinaryFileStream', array($parameters));
    }

    /**
     * Creates the asset thumbnail into the temp storage and return its token identifier.
     *
     * @param CreateThumbnailToTempStorage $parameters
     * @return CreateThumbnailToTempStorageResponse
     */
    public function CreateThumbnailToTempStorage(CreateThumbnailToTempStorage $parameters)
    {
      return $this->__soapCall('CreateThumbnailToTempStorage', array($parameters));
    }

    /**
     * return the asset thumbnail download url.
     *
     * @param GetThumbnailDownloadURL $parameters
     * @return GetThumbnailDownloadURLResponse
     */
    public function GetThumbnailDownloadURL(GetThumbnailDownloadURL $parameters)
    {
      return $this->__soapCall('GetThumbnailDownloadURL', array($parameters));
    }

    /**
     * Get asset ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

}
