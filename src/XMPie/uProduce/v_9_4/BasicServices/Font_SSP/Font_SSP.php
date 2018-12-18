<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP;


/**
 * Font Web Service.
 */
class Font_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\CreateNewResponse',
  'CreateNewFromZip' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\CreateNewFromZip',
  'CreateNewFromZipResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\CreateNewFromZipResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\ArrayOfString',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\Replace',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\ReplaceResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\DeleteResponse',
  'GetCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetCampaign',
  'GetCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetCampaignResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetPropertyResponse',
  'GetModificationDate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetModificationDate',
  'GetModificationDateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetModificationDateResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetProperties',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\SetPropertiesResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetNameResponse',
  'GetPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetPath',
  'GetPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetPathResponse',
  'GetSecondaryPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSecondaryPath',
  'GetSecondaryPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSecondaryPathResponse',
  'GetBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinaryFileStream',
  'GetBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinaryFileStreamResponse',
  'GetBinarySecondaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinarySecondaryFileStream',
  'GetBinarySecondaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinarySecondaryFileStreamResponse',
  'GetBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinaryFileStreamChunk',
  'GetBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinaryFileStreamChunkResponse',
  'GetBinarySecondaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinarySecondaryFileStreamChunk',
  'GetBinarySecondaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinarySecondaryFileStreamChunkResponse',
  'GetBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinaryFileStreamSize',
  'GetBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinaryFileStreamSizeResponse',
  'GetBinarySecondaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinarySecondaryFileStreamSize',
  'GetBinarySecondaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetBinarySecondaryFileStreamSizeResponse',
  'GetFontFileInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetFontFileInfo',
  'GetFontFileInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetFontFileInfoResponse',
  'FontInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\FontInfo',
  'GetFontFileSizeInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetFontFileSizeInfo',
  'GetFontFileSizeInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetFontFileSizeInfoResponse',
  'FontSizeInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\FontSizeInfo',
  'GetUEditCompatibleFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetUEditCompatibleFileStream',
  'GetUEditCompatibleFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetUEditCompatibleFileStreamResponse',
  'GetSWFFontFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFontFileStream',
  'GetSWFFontFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFontFileStreamResponse',
  'GetSWFFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFileStream',
  'GetSWFFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFileStreamResponse',
  'GetFontFamilyAndStyle' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetFontFamilyAndStyle',
  'GetFontFamilyAndStyleResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetFontFamilyAndStyleResponse',
  'GetDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetDownloadURL',
  'GetDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetDownloadURLResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetIDResponse',
  'GetSWFFullNameFontStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFullNameFontStream',
  'GetSWFFullNameFontStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFullNameFontStreamResponse',
  'GetSWFFullNameFontFamilyAndFace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFullNameFontFamilyAndFace',
  'GetSWFFullNameFontFamilyAndFaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFullNameFontFamilyAndFaceResponse',
  'GetSWFFullNameFontStreamWithFamilyAndFace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFullNameFontStreamWithFamilyAndFace',
  'GetSWFFullNameFontStreamWithFamilyAndFaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFullNameFontStreamWithFamilyAndFaceResponse',
  'GetSWFFontVersion' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFontVersion',
  'GetSWFFontVersionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Font_SSP\\GetSWFFontVersionResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Font_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Font.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Create new Font from zip file.
     *
     * @param CreateNewFromZip $parameters
     * @return CreateNewFromZipResponse
     */
    public function CreateNewFromZip(CreateNewFromZip $parameters)
    {
      return $this->__soapCall('CreateNewFromZip', array($parameters));
    }

    /**
     * Replace Font.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Delete Font.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Font's Campaign.
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
      return $this->__soapCall('GetCampaign', array($parameters));
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
     * Get modification date.
     *
     * @param GetModificationDate $parameters
     * @return GetModificationDateResponse
     */
    public function GetModificationDate(GetModificationDate $parameters)
    {
      return $this->__soapCall('GetModificationDate', array($parameters));
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
     * Set property.
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
     * Get Font's name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Get Font's path.
     *
     * @param GetPath $parameters
     * @return GetPathResponse
     */
    public function GetPath(GetPath $parameters)
    {
      return $this->__soapCall('GetPath', array($parameters));
    }

    /**
     * Get Font's secondary path.
     *
     * @param GetSecondaryPath $parameters
     * @return GetSecondaryPathResponse
     */
    public function GetSecondaryPath(GetSecondaryPath $parameters)
    {
      return $this->__soapCall('GetSecondaryPath', array($parameters));
    }

    /**
     * return the font stream.
     *
     * @param GetBinaryFileStream $parameters
     * @return GetBinaryFileStreamResponse
     */
    public function GetBinaryFileStream(GetBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetBinaryFileStream', array($parameters));
    }

    /**
     * return the font secondary file stream.
     *
     * @param GetBinarySecondaryFileStream $parameters
     * @return GetBinarySecondaryFileStreamResponse
     */
    public function GetBinarySecondaryFileStream(GetBinarySecondaryFileStream $parameters)
    {
      return $this->__soapCall('GetBinarySecondaryFileStream', array($parameters));
    }

    /**
     * Return a font chunk stream.
     *
     * @param GetBinaryFileStreamChunk $parameters
     * @return GetBinaryFileStreamChunkResponse
     */
    public function GetBinaryFileStreamChunk(GetBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Return a font secondary file chunk stream.
     *
     * @param GetBinarySecondaryFileStreamChunk $parameters
     * @return GetBinarySecondaryFileStreamChunkResponse
     */
    public function GetBinarySecondaryFileStreamChunk(GetBinarySecondaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetBinarySecondaryFileStreamChunk', array($parameters));
    }

    /**
     * Get font size.
     *
     * @param GetBinaryFileStreamSize $parameters
     * @return GetBinaryFileStreamSizeResponse
     */
    public function GetBinaryFileStreamSize(GetBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamSize', array($parameters));
    }

    /**
     * Get font secondary file size.
     *
     * @param GetBinarySecondaryFileStreamSize $parameters
     * @return GetBinarySecondaryFileStreamSizeResponse
     */
    public function GetBinarySecondaryFileStreamSize(GetBinarySecondaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetBinarySecondaryFileStreamSize', array($parameters));
    }

    /**
     * Get information of the font file
     *
     * @param GetFontFileInfo $parameters
     * @return GetFontFileInfoResponse
     */
    public function GetFontFileInfo(GetFontFileInfo $parameters)
    {
      return $this->__soapCall('GetFontFileInfo', array($parameters));
    }

    /**
     * Get information of the font size
     *
     * @param GetFontFileSizeInfo $parameters
     * @return GetFontFileSizeInfoResponse
     */
    public function GetFontFileSizeInfo(GetFontFileSizeInfo $parameters)
    {
      return $this->__soapCall('GetFontFileSizeInfo', array($parameters));
    }

    /**
     * Get a stream of the font file converted to fit uEdit needs
     *
     * @param GetUEditCompatibleFileStream $parameters
     * @return GetUEditCompatibleFileStreamResponse
     */
    public function GetUEditCompatibleFileStream(GetUEditCompatibleFileStream $parameters)
    {
      return $this->__soapCall('GetUEditCompatibleFileStream', array($parameters));
    }

    /**
     * Converts the fonst to SWF and returns the font stream, the font Family Name & the Font Style
     *
     * @param GetSWFFontFileStream $parameters
     * @return GetSWFFontFileStreamResponse
     */
    public function GetSWFFontFileStream(GetSWFFontFileStream $parameters)
    {
      return $this->__soapCall('GetSWFFontFileStream', array($parameters));
    }

    /**
     * Converts the font to SWF and returns the font stream
     *
     * @param GetSWFFileStream $parameters
     * @return GetSWFFileStreamResponse
     */
    public function GetSWFFileStream(GetSWFFileStream $parameters)
    {
      return $this->__soapCall('GetSWFFileStream', array($parameters));
    }

    /**
     * Returns the font Family Name & the Font Style
     *
     * @param GetFontFamilyAndStyle $parameters
     * @return GetFontFamilyAndStyleResponse
     */
    public function GetFontFamilyAndStyle(GetFontFamilyAndStyle $parameters)
    {
      return $this->__soapCall('GetFontFamilyAndStyle', array($parameters));
    }

    /**
     * return the font download url.
     *
     * @param GetDownloadURL $parameters
     * @return GetDownloadURLResponse
     */
    public function GetDownloadURL(GetDownloadURL $parameters)
    {
      return $this->__soapCall('GetDownloadURL', array($parameters));
    }

    /**
     * Get Font's ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Converts the font to SWF Font where the Font Face is always Regular and the real Font Face is 							   concatenated to the Family Name and returns the font stream.
     *
     * @param GetSWFFullNameFontStream $parameters
     * @return GetSWFFullNameFontStreamResponse
     */
    public function GetSWFFullNameFontStream(GetSWFFullNameFontStream $parameters)
    {
      return $this->__soapCall('GetSWFFullNameFontStream', array($parameters));
    }

    /**
     * Returns the font Family Name & the Font Face.
     *
     * @param GetSWFFullNameFontFamilyAndFace $parameters
     * @return GetSWFFullNameFontFamilyAndFaceResponse
     */
    public function GetSWFFullNameFontFamilyAndFace(GetSWFFullNameFontFamilyAndFace $parameters)
    {
      return $this->__soapCall('GetSWFFullNameFontFamilyAndFace', array($parameters));
    }

    /**
     * Converts the font to SWF Font where the Font Face is always Regular and the real Font Face is 							   concatenated to the Family Name and returns the font stream and the original Family Name & Font Face.
     *
     * @param GetSWFFullNameFontStreamWithFamilyAndFace $parameters
     * @return GetSWFFullNameFontStreamWithFamilyAndFaceResponse
     */
    public function GetSWFFullNameFontStreamWithFamilyAndFace(GetSWFFullNameFontStreamWithFamilyAndFace $parameters)
    {
      return $this->__soapCall('GetSWFFullNameFontStreamWithFamilyAndFace', array($parameters));
    }

    /**
     * Gets the SWF Font Version
     *
     * @param GetSWFFontVersion $parameters
     * @return GetSWFFontVersionResponse
     */
    public function GetSWFFontVersion(GetSWFFontVersion $parameters)
    {
      return $this->__soapCall('GetSWFFontVersion', array($parameters));
    }

}
