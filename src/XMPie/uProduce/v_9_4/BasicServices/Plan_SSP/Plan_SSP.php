<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Plan_SSP;


/**
 * Plan Web Service.
 */
class Plan_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\CreateNewResponse',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\Replace',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ReplaceResponse',
  'GetCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetCampaign',
  'GetCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetCampaignResponse',
  'GetFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetFolderPath',
  'GetFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetFolderPathResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetPropertyResponse',
  'GetModificationDate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetModificationDate',
  'GetModificationDateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetModificationDateResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\SetPropertiesResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetNameResponse',
  'GetPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetPath',
  'GetPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetPathResponse',
  'GetBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetBinaryFileStream',
  'GetBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetBinaryFileStreamResponse',
  'GetBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetBinaryFileStreamChunk',
  'GetBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetBinaryFileStreamChunkResponse',
  'GetBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetBinaryFileStreamSize',
  'GetBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetBinaryFileStreamSizeResponse',
  'GetDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetDownloadURL',
  'GetDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetDownloadURLResponse',
  'GetLastJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetLastJob',
  'GetLastJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetLastJobResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\IsExistResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\DeleteSettingsResponse',
  'ConvertToWebReady' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ConvertToWebReady',
  'ConvertToWebReadyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ConvertToWebReadyResponse',
  'Report' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\Report',
  'ArrayOfReportMessage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ArrayOfReportMessage',
  'ReportMessage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\ReportMessage',
  'ClonePlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\CloneCustom',
  'CloneResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\CloneResponse',
  'PlanMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\PlanMapping',
  'IDMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4\\BasicServices\\Plan_SSP\\IDMapping',
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
        $wsdl = 'http://localhost/xmpiewsapi/Plan_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Plan.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Replace Plan.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Get Campaign.
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
      return $this->__soapCall('GetCampaign', array($parameters));
    }

    /**
     * Get Folder Path.
     *
     * @param GetFolderPath $parameters
     * @return GetFolderPathResponse
     */
    public function GetFolderPath(GetFolderPath $parameters)
    {
      return $this->__soapCall('GetFolderPath', array($parameters));
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
     * Get all properties.
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
     * Get Plan's name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Get Plan's path.
     *
     * @param GetPath $parameters
     * @return GetPathResponse
     */
    public function GetPath(GetPath $parameters)
    {
      return $this->__soapCall('GetPath', array($parameters));
    }

    /**
     * return the plan stream.
     *
     * @param GetBinaryFileStream $parameters
     * @return GetBinaryFileStreamResponse
     */
    public function GetBinaryFileStream(GetBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetBinaryFileStream', array($parameters));
    }

    /**
     * Return a plan file chunk stream.
     *
     * @param GetBinaryFileStreamChunk $parameters
     * @return GetBinaryFileStreamChunkResponse
     */
    public function GetBinaryFileStreamChunk(GetBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Get plan file size.
     *
     * @param GetBinaryFileStreamSize $parameters
     * @return GetBinaryFileStreamSizeResponse
     */
    public function GetBinaryFileStreamSize(GetBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamSize', array($parameters));
    }

    /**
     * return the plan download url.
     *
     * @param GetDownloadURL $parameters
     * @return GetDownloadURLResponse
     */
    public function GetDownloadURL(GetDownloadURL $parameters)
    {
      return $this->__soapCall('GetDownloadURL', array($parameters));
    }

    /**
     * Get Last job id.
     *
     * @param GetLastJob $parameters
     * @return GetLastJobResponse
     */
    public function GetLastJob(GetLastJob $parameters)
    {
      return $this->__soapCall('GetLastJob', array($parameters));
    }

    /**
     * Is Plan exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

    /**
     * Defines Setting(s).
     *
     * @param SetSettings $parameters
     * @return SetSettingsResponse
     */
    public function SetSettings(SetSettings $parameters)
    {
      return $this->__soapCall('SetSettings', array($parameters));
    }

    /**
     * Returns Setting(s) for the Plan and the user.
     *
     * @param GetSettings $parameters
     * @return GetSettingsResponse
     */
    public function GetSettings(GetSettings $parameters)
    {
      return $this->__soapCall('GetSettings', array($parameters));
    }

    /**
     * Deletes Setting(s).
     *
     * @param DeleteSettings $parameters
     * @return DeleteSettingsResponse
     */
    public function DeleteSettings(DeleteSettings $parameters)
    {
      return $this->__soapCall('DeleteSettings', array($parameters));
    }

    /**
     * Convert a plan to be web-ready.
     *
     * @param ConvertToWebReady $parameters
     * @return ConvertToWebReadyResponse
     */
    public function ConvertToWebReady(ConvertToWebReady $parameters)
    {
      return $this->__soapCall('ConvertToWebReady', array($parameters));
    }

    /**
     * Duplicates the plan of a campaign
     *
     * @param CloneCustom $parameters
     * @return CloneResponse
     */
    public function aClone($parameters)
    {
      return $this->__soapCall('Clone', array($parameters));
    }

}
